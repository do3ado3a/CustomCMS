<?php

class DashboardController extends AppController {
  
  var $name = 'Dashboard';
  var $uses = array('Post', 'Comment', 'User');
  
  function admin_index()
  {
    $posts = $this->Post->find('all', array('conditions' => array('Post.type !=' => 'Photo'), 'order' => 'Post.id DESC', 'limit' => 5, 'callbacks' => false));
    
    $postStartDate  = $this->Post->field('created', null, 'Post.id ASC');
    $postTotalCount = $this->Post->find('count'); 
    $postWeekCount  = $this->Post->find('count', array('conditions' => array('Post.created >' => date('Y-m-d', strtotime("-1 weeks")) ))); 
    
    $commentStartDate  = $this->Comment->field('created', null, 'Comment.id ASC');
    $commentTotalCount = $this->Comment->find('count');  
    $commentWeekCount  = $this->Comment->find('count', array('conditions' => array('Comment.created >' => date('Y-m-d', strtotime("-1 weeks")) ))); 
  
    
    $subscriberStartDate  = $this->User->field('created', null, 'User.id ASC');
    $subscriberTotalCount = $this->User->find('count');       
    $subscriberWeekCount  = $this->User->find('count', array('conditions' => array('User.created >' => date('Y-m-d', strtotime("-1 weeks")) )));   
  
    
    $this->set(compact('posts', 'commentStartDate', 'commentTotalCount', 'commentWeekCount', 
                      'subscriberStartDate', 'subscriberTotalCount', 'subscriberWeekCount',
                      'postStartDate', 'postTotalCount', 'postWeekCount'));
  }
}
?>