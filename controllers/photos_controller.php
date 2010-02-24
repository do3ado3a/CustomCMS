<?php
App::import('Controller', 'Posts');
class PhotosController extends PostsController {

	var $name = 'Photos';
	var $postType = 'Photo'; # expected to be overridden

	
	function admin_delete($id = null) {
	  $this->Redirect->idEmpty($id, array('controller' => 'albums', 'action' => 'index'));
		if ($this->{$this->postType}->del($id)) 
		{
			$this->Redirect->flashSuccess("{$this->postType} deleted.", $this->referer());
		}
	}	

}
?>