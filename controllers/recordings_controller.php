<?php
class RecordingsController extends AppController {

	var $name = 'Recordings';
	var $uses = null;
	var $components = array('Recording' => array('cookies' => array('Posts.posts' => array('list','expanded'), 
	                                                                'Comments.comments' => array('list','expanded'),
	                                                                'Links.links' => array('list','expanded'),
	                                                                'Media.media' => array('list','expanded'),
	                                                                'Albums.albums' => array('list','expanded'),
	                                                                'Newsletters.newsletters' => array('list','expanded')
	                                                               ),
	                                             'urlRedirect' => array('controller' => 'posts', 'action' => 'index')), 
	                                             'Redirect');
	
	
	function toggle()
	{
	  if ($this->Recording->save()) 
	  {
	    $this->Recording->redirect();
	  }
	  else 
	  {
	    $this->Redirect->flashWarning('Invalid toggle. Please try again.', $this->Recording->urlRedirect);
	  }
	}
	
	
}
?>