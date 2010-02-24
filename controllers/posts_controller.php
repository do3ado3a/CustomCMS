<?php
class PostsController extends AppController {

	var $name = 'Posts';
	var $postType = 'Post'; # expected to be overridden

  function beforeFilter()
  {
    $this->paginate = array('limit' => 3, 'order' => array("{$this->postType}.id" => 'DESC'));
    parent::beforeFilter();
  }
	
  	function index() 
	{    
	  $this->Redirect->urlToNamed();
	  $this->pageTitle = $this->name;
	  $conditions = isset($this->params['named']['tag']) ? $this->habtmConditions($this->params['named']['tag'], $this->postType, 'Tag') : $this->searchConditions($this->params);
	  $this->{$this->postType}->recursive = 0;
		$this->set('posts', $this->paginate($this->postType, $conditions));
	}
  
  
	function admin_index() 
	{    
	  $this->Redirect->urlToNamed();
	  $this->pageTitle = $this->name;
	  $conditions = isset($this->params['named']['tag']) ? $this->habtmConditions($this->params['named']['tag'], $this->postType, 'Tag') : $this->searchConditions($this->params);
	  $this->{$this->postType}->recursive = 0;
		$this->set('posts', $this->paginate($this->postType, $conditions));
	}

	function admin_view($id = null) 
	{
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		$post = $this->_findPost($id);
		$this->pageTitle = $post[$this->postType]['title'];
		$this->set(compact('post'));
	}

	function admin_add() {
	  $this->pageTitle = 'New Post';
		if (!empty($this->data)) 
		{
		  $this->data[$this->postType]['user_id'] = $this->userId;
			$this->{$this->postType}->create();
			if ($this->{$this->postType}->save($this->data)) 
			{
				$this->Redirect->flashSuccess("{$this->postType} Saved.", array('action' => 'view', $this->{$this->postType}->id));
			} 
			else 
			{
			  $this->Redirect->flashWarning("{$this->postType} could not be saved. Please try again.");
			}
		}
   $this->_lists();
	}

	function admin_edit($id = null) {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		$post = $this->_findPost($id);
		$this->pageTitle = 'Edit ' . $post[$this->postType]['title'];
 		
		if (!empty($this->data)) 
		{
			if ($this->{$this->postType}->save($this->data)) 
			{
				$this->Redirect->flashSuccess("{$this->postType} Saved.", array('action' => 'view', $this->{$this->postType}->id));
			} 
			else 
			{
			   $this->Redirect->flashWarning("{$this->postType} could not be saved. Please try again.");
			}
		}
		if (empty($this->data)) {
			$this->data = $post;
		}
    $this->_lists();
	}

	function admin_delete($id = null) {
	  $this->Redirect->idEmpty($id, array('action' => 'index'));
		if ($this->{$this->postType}->del($id)) 
		{
			$this->Redirect->flashSuccess("{$this->postType} deleted.", array('action' => 'index'));
		}
	}
	
	
	# Request actions
	function statuses()
	{
	  $this->{$this->postType}->Status->recursive = 0;
	  return $this->{$this->postType}->Status->find('all');
	}
	
	
	# Protected
	function _findPost($id = null)
	{
	  $post = $this->{$this->postType}->find('first', array('conditions' => array("{$this->postType}.id = " => $id)));
	  if (empty($post)) 
	  {
	   $this->Redirect->flashWarning("{$this->postType} could not be found.", array('action' => 'index'));
	  }
	  return $post;
	}
	
	function _lists()
	{
		$statuses = $this->{$this->postType}->Status->find('list');
		$this->set(compact('statuses'));
	}
	

}
?>