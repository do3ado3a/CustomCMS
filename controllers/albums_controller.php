<?php
App::import('Controller', 'Posts');
class AlbumsController extends PostsController {
  var $name = 'Albums';
  var $postType = 'Album';

  function admin_view($id = null) 
	{
    parent::admin_view($id);
    if (!empty($this->data)) 
		{
	    $this->data['User']['user_id'] = $this->userId;
			$this->{$this->postType}->Photo->create();
			if ($this->{$this->postType}->Photo->save($this->data)) 
			{
				$this->Redirect->flashSuccess("Photo Saved.", array('controller' => 'albums', 'action' => 'view', $this->data['Photo']['parent_id']));
			} 
			else 
			{
			  $this->Redirect->flashWarning("Photo could not be saved. Please try again.");
			}
		}
     $this->_lists();    
	}	  
  
}
?>