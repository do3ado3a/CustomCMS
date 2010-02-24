<?php

class AppController extends Controller {
  
	var $helpers = array('Html', 'Form', 'Recording', 'Taggable', 'Time', 'Javascript', 'Text');
	var $components = array('Session', 'Redirect', 'Auth', 'Email');
	var $userId = null;
	
	function beforeFilter()
	{
		if (isset($this->params['admin']) && $this->params['admin']) $this->layout = 'admin';
		 $this->userId = $this->Auth->user('id');
	 	 //$this->Auth->allow('admin_index','admin_add', 'admin_view', 'admin_edit', 'admin_delete', 'admin_change_password');
   		 $this->Auth->fields = array('username' => 'email', 'password' => 'password');
   		 $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => true);
		
	}
	
	
	function searchConditions($params = null)
	{
	  $conditions = array();
	  $statuses = array('published' => '1', 'drafts' => '2');
	  if (isset($params['named']['q'])) 
	  {
	    $conditions['MATCH(Post.title, Post.body) AGAINST(? IN BOOLEAN MODE)'] = $params['named']['q'];
	  }
	  if (isset($params['named']['status']) && isset($statuses[$params['named']['status']])) 
	  {
	    $conditions['Post.status_id'] = $statuses[$params['named']['status']];
	  }
	  return $conditions;
	}
	
	
  function habtmConditions($param, $model, $habtm)
	{
	  $conditions = array();
	  $assocModel = $this->{$model}->hasAndBelongsToMany[$habtm];
	  $assocHabtm = $this->{$model}->{$habtm}->hasAndBelongsToMany[$model];
	  if (isset($param)) 
	  {
      $conditions['joins'][] = array(
        'table' => $assocModel['joinTable'],
        'alias' => $assocModel['with'],
        'type' => 'inner',
        'foreignKey' => false,
        'conditions'=> array( "{$assocModel['with']}.{$assocModel['foreignKey']} = {$this->{$model}->alias}.{$this->{$model}->primaryKey}")
      );
      $conditions['joins'][] = array(
       'table' => $this->{$model}->{$habtm}->table,
       'alias' => $habtm,
       'type' => 'inner',
       'foreignKey' => false,
       'conditions'=> array(
       "{$habtm}.{$this->{$model}->{$habtm}->primaryKey} = {$assocHabtm['with']}.{$assocHabtm['foreignKey']}",
       "{$habtm}.name" => explode(',', $param)
      )
      );	     
	  }
	  $conditions['group'] = "{$model}.{$this->{$model}->primaryKey}";
	  return $conditions;
	}
	
  
  
}
?>