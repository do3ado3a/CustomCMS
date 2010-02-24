<?php
App::import('model', 'Post');
class Media extends Post {
  
  var $actsAs = array('Typeable', 
                       'Attachable' => array( 'types' => array('image/jpeg' => 'jpg', 'image/pjpeg' => 'jpg', 'application/zip' => 'zip')));
  
  var $name = 'Media';


}
?>