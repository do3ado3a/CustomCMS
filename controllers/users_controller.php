<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');


  function admin_login()
  {
    $this->layout = 'login';
  }
  
  function admin_logout()
  {
    $this->redirect($this->Auth->logout());
  }  

	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) 
			{
        $this->Redirect->flashSuccess('User Saved.', array('action' => 'index'));
			} 
			else 
			{
				$this->Redirect->flashWarning('User could not be saved. Please try again.');
			}
		}
	}

	function admin_edit($id = null) {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
    $user = $this->_findUser($id);
		if (!empty($this->data)) 
		{
			  if ($this->User->save($this->data)) 
			  {
				  $this->Redirect->flashSuccess('User Saved.', array('action' => 'index'));
			  } 
			  else 
			  {
				  $this->Redirect->flashWarning('User could not be saved. Please try again.');
			  }
		}  
		if (empty($this->data)) 
		{
		  $user['User']['password'] = '';
			$this->data = $user;
		}
	}
	

	function admin_change_password($id = null) {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
    $user = $this->_findUser($id);
		if (!empty($this->data)) 
		{  	   
		  if ($user['User']['password'] == $this->Auth->password($this->data['User']['old_password'])) 
  	  {
  	    $this->data['User']['password'] = $this->Auth->password($this->data['User']['password']);
  	    
			  if ($this->User->save($this->data)) 
			  {
				  $this->Redirect->flashSuccess('Password Saved.', array('action' => 'index'));
			  } 
			  else 
			  {
				  $this->Redirect->flashWarning('Password could not be saved. Please try again.');
			  }
		  }
		  else
		  {
		    $this->Redirect->flashWarning('Old Password did not match. Please try again.');
		  }	  
		}
		if (empty($this->data)) 
		{
		  $user['User']['password'] = '';
			$this->data = $user;
		}
	}	

	function admin_delete($id = null) {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		if ($this->User->del($id)) 
		{
      $this->Redirect->flashSuccess('User deleted.', array('action' => 'index'));
		}
	}
	
	# Protected
	function _findUser($id = null)
	{
	  $user = $this->User->find('first', array('conditions' => array('User.id = ' => $id)));
	  if (empty($user)) 
	  {
	   $this->Redirect->flashWarning('User could not be found.', array('action' => 'index'));
	  }
	  return $user;
	}	

}
?>