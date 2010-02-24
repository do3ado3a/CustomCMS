<?php
App::import('Controller', 'Posts');
class CommentsController extends PostsController {
  var $name = 'Comments';
  var $postType = 'Comment';
  
  
  function _lists()
  {
    parent::_lists();
    $parents = $this->Comment->Post->find('list');
    $this->set(compact('parents'));
  }
  
  
  
}








?>