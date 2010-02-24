<?php
App::import('Controller', 'Posts');
class NewslettersController extends PostsController {
  var $name = 'Newsletters';
  var $postType = 'Newsletter';
  
  function admin_send($id = null)
  {
    $this->Redirect->idEmpty($id, array('action' => 'index'));
		$post = $this->_findPost($id);
    $users = $this->Newsletter->User->find('all', array('User.subscribed' => true));
    foreach ($users as $user) 
    {
        $this->Email->from    = 'noreply@customcms.com';
        $this->Email->subject = $post['Newsletter']['title'];      
        $this->Email->to = $user['User']['email'];
        $this->Email->send($post['Newsletter']['body']); 
        $this->Email->reset();
    }
    $this->Redirect->flashSuccess("Newsletter sent.", $this->referer());
  }
}
?>