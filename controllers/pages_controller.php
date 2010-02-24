<?php

class PagesController extends AppController {

	var $name = 'Pages';
	var $pageType = 'Page'; # expected to be overridden

  function beforeFilter()
  {
    $this->paginate = array('limit' => 3, 'order' => array("{$this->pageType}.id" => 'DESC'));
    parent::beforeFilter();
  }
	function display() {
	
	if (isset($this->params['admin']) && $this->params['admin']) $this->layout = 'admin';

		
	}

  	function index() 
	{    
	  $this->Redirect->urlToNamed();
	  $this->pageTitle = $this->name;
	  $conditions = isset($this->params['named']['tag']) ? $this->habtmConditions($this->params['named']['tag'], $this->pageType, 'Tag') : $this->searchConditions($this->params);
	  $this->{$this->pageType}->recursive = 0;
		$this->set('pages', $this->paginate($this->pageType, $conditions));
	}
  
  
	function admin_index() 
	{    
	  $this->Redirect->urlToNamed();
	  $this->pageTitle = $this->name;
	  $conditions = isset($this->params['named']['tag']) ? $this->habtmConditions($this->params['named']['tag'], $this->pageType, 'Tag') : $this->searchConditions($this->params);
	  $this->{$this->pageType}->recursive = 0;
		$this->set('pages', $this->paginate($this->pageType, $conditions));
	}

	function admin_view($id = null) 
	{
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		$page = $this->_findPage($id);
		$this->pageTitle = $page[$this->pageType]['title'];
		$this->set(compact('page'));
	}

	function admin_add() {
	  $this->pageTitle = 'New Page';
		if (!empty($this->data)) 
		{
		  $this->data[$this->pageType]['user_id'] = $this->userId;
			$this->{$this->pageType}->create();
			if ($this->{$this->pageType}->save($this->data)) 
			{
				$this->Redirect->flashSuccess("{$this->pageType} Saved.", array('action' => 'view', $this->{$this->pageType}->id));
			} 
			else 
			{
			  $this->Redirect->flashWarning("{$this->pageType} could not be saved. Please try again.");
			}
		}
   $this->_lists();
	}

	function admin_edit($id = null) {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		$page = $this->_findPage($id);
		$this->pageTitle = 'Edit ' . $page[$this->pageType]['title'];
 		
		if (!empty($this->data)) 
		{
			if ($this->{$this->pageType}->save($this->data)) 
			{
				$this->Redirect->flashSuccess("{$this->pageType} Saved.", array('action' => 'view', $this->{$this->pageType}->id));
			} 
			else 
			{
			   $this->Redirect->flashWarning("{$this->pageType} could not be saved. Please try again.");
			}
		}
		if (empty($this->data)) {
			$this->data = $page;
		}
    $this->_lists();
	}

	function admin_delete($id = null) {
	  $this->Redirect->idEmpty($id, array('action' => 'index'));
		if ($this->{$this->pageType}->del($id)) 
		{
			$this->Redirect->flashSuccess("{$this->pageType} deleted.", array('action' => 'index'));
		}
	}
	
	
	# Request actions
	function statuses()
	{
	  $this->{$this->pageType}->Status->recursive = 0;
	  return $this->{$this->pageType}->Status->find('all');
	}
	
	
	# Protected
	function _findPage($id = null)
	{
	  $page = $this->{$this->pageType}->find('first', array('conditions' => array("{$this->pageType}.id = " => $id)));
	  if (empty($page)) 
	  {
	   $this->Redirect->flashWarning("{$this->pageType} could not be found.", array('action' => 'index'));
	  }
	  return $page;
	}
	
	function _lists()
	{
		$statuses = $this->{$this->pageType}->Status->find('list');
		$this->set(compact('statuses'));
	}
	

}
?>