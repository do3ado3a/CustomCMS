<?php

class AttachableBehavior extends ModelBehavior {
  
  var $_defaults = array( 'label'         =>  'attachment',
                          'location'      =>  'files',
                          'errorMessages' =>  array('isUploaded'   => 'Malicious file upload.',
                                                    'moveUploaded' => 'Error moving file upload.',
                                                    'isValidType'  => 'Invalid file type. Please check your file type and try again.',
                                                    'isValidSize'  => 'Invalid file size. Please check your file size and try again.'
                                                    ),
                          'thumbQuality'  =>  80,
                          'maxSize'       =>  '1048576',
                          'fields'        =>  array('attachmentLocation' => 'attachmentLocation',
                                                    'attachmentWidth'    => 'attachmentWidth',
                                                    'attachmentHeight'   => 'attachmentHeight',
                                                    'attachmentName'     => 'attachmentName', 
                                                    'attachmentType'     => 'attachmentType', 
                                                    'attachmentSize'     => 'attachmentSize'),  
                          );
                          
  var $_validThumbTypes = array('image/jpeg', 'image/pjpeg');
  var $_attachmentRoot = null;
  var $_errorMsg = "Error uploading file";
  var $settings = array();
  var $model = null;
  
  function setup(&$model, $config = array())
  {
    $this->settings[$model->name] = array_merge($this->_defaults, $config);
    $this->model = $model;
    $this->_attachmentRoot = WWW_ROOT . str_replace(array('/', '\\'), array(DS,DS), $this->settings[$model->name]['location']) . DS;
  }
  
  function beforeSave(&$model)
  {
    extract($this->settings[$model->name]);
    $attachment = $model->data[$model->name][$label];
    if (!empty($attachment['name'])) 
    {
      $model->data[$model->name][$fields['attachmentName']] = ($this->_fileExists($this->_attachmentRoot . $attachment['name'])) ? time() . '_' . $attachment['name'] : $attachment['name'];
      $model->data[$model->name][$fields['attachmentType']] = $attachment['type'];
      $model->data[$model->name][$fields['attachmentSize']] = $attachment['size'];
      $model->data[$model->name][$fields['attachmentLocation']] = $location;  
      if ($model->id > 0) 
      {
        $record = $model->findById($model->id);
        $this->_deleteAttachments($record[$model->name][$fields['attachmentName']]);
      }
      
      if (!$this->_isUploaded($attachment) ||
          !$this->_isValidSize($attachment['size']) ||
          !$this->_isValidType($attachment) ||
          !$this->_dirExists($this->_attachmentRoot) ||
          !$this->_moveUploaded($attachment['tmp_name'], $model->data[$model->name][$fields['attachmentName']])
          )
      {
        $model->validationErrors[$label] = $this->_errorMsg;
        return false;
      }
       if (in_array($attachment['type'], $this->_validThumbTypes)) 
       {
         list($width, $height) = getimagesize($this->_attachmentRoot . $model->data[$model->name][$fields['attachmentName']]);
         $model->data[$model->name][$fields['attachmentWidth']]   = $width;
         $model->data[$model->name][$fields['attachmentHeight']]  = $height;
         if (isset($this->settings[$model->name]['thumbnails'])) 
         {
           foreach ($this->settings[$model->name]['thumbnails'] as $dir => $size) 
           {
             list($width, $height) = explode('x', strtolower($size));
             if($this->_dirExists($this->_attachmentRoot . $dir))
             {
               $this->_resizeToThumb($model->data[$model->name][$fields['attachmentName']], $dir, $width, $height);
             }
           }           
         }
       }           
    }
    else
    {
      $model->validationErrors[$label] = $this->_errorMsg;
      return false;   
    }
   // pr($attachment);
  //  exit();
  return true;
  }
  
  function beforeDelete(&$model)
  {
    $model->read(null, $model->id);
    $this->_deleteAttachments($model->data[$model->name]['attachmentName']);
    return true;
  }
  

  
  

  # protected methods
    
  function _moveUploaded($tmpName, $attachmentName)
  {
    if (move_uploaded_file($tmpName, $this->_attachmentRoot . $attachmentName )) 
    {
      return true;
    }
      $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['moveUploaded'];
      return false;
  }
  
  function _isUploaded($attachment)
  {
    if (isset($attachment['error']) && $attachment['error'] == 0 || !empty($attachment['tmp_name']) && $attachment['tmp_name'] != 'none') 
    {
      return is_uploaded_file($attachment['tmp_name']);
    }
      $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isUploaded'];
      return false;
  } 
  
  function _isValidType($attachment)
  { 
    $ext = substr($attachment['name'], strrpos($attachment['name'], '.') + 1); 
    if (isset($this->settings[$this->model->name]['types'][$attachment['type']]) && 
        $ext == $this->settings[$this->model->name]['types'][$attachment['type']])
    {
      return true;
    }
      $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isValidType'];
      return false;    
  }

  function _isValidSize($size)
  { 
    if($size == 0) return false;
    
    if ($size <= $this->settings[$this->model->name]['maxSize']) 
    {
      return true;
    }
     $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isValidSize'];
     return false;
  }  
  
  function _dirExists($dir)
  {
    if (!file_exists($dir)) 
    {
      trigger_error(__("AttachableBehavior Error - Please create '{$dir}' directory and set permissions for uploading.", true), E_USER_WARNING);
      return false;
    }   
    return true;
  }
  
  function _fileExists($file)
  {
    if (file_exists($file)) 
    {
      return true;
    }   
    return false;
  }  
  
  function _deleteFile($file)
  {
    if (file_exists($file)) 
		{
			return unlink($file);
		}
		return false;
  }
  
  function _deleteAttachments($attachment)
  {
    $this->_deleteFile($this->_attachmentRoot . $attachment);
    if (isset($this->settings[$this->model->name]['thumbnails'])) 
    {
      foreach ($this->settings[$this->model->name]['thumbnails'] as $dir => $size)
      {
        if ($this->_fileExists($this->_attachmentRoot . $dir . DS . $attachment) && !empty($attachment)) 
        {
          $this->_deleteFile($this->_attachmentRoot . $dir . DS . $attachment);
        }
      } 
    }   
  }  
  
  function _resizeToThumb($imgName, $dir, $canvasWidth, $canvasHeight)
  {
    $img = $this->_attachmentRoot . $imgName;
    list($imgWidth, $imgHeight) = getimagesize($img);
    $ratioOrig = $imgWidth / $imgHeight;
    if(($canvasWidth / $canvasHeight) > $ratioOrig)
    {
      $canvasWidth = $canvasHeight * $ratioOrig;	
    }
    else
    {
      $canvasHeight = $canvasWidth / $ratioOrig;
    }
    $original = imagecreatefromjpeg($img);
    $canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);
    imagecopyresampled($canvas, $original, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $imgWidth, $imgHeight); 
    $createJpg = imagejpeg($canvas, $this->_attachmentRoot . $dir . DS . $imgName, $this->settings[$this->model->name]['thumbQuality']);
    imagedestroy($canvas);
    imagedestroy($original);
    if($createJpg)
    {
      return true;
    }
    return false;
  }    
  
  
}
?>