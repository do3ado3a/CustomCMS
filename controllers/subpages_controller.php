<?php
App::import('Controller', 'Pages');
class SubpagesController extends PagesController {
  var $name = 'Subpages';
  var $pageType = 'Subpage';
  
  
  function _lists()
  {
    parent::_lists();
    $parents = $this->Subpage->Page->find('list');
    $this->set(compact('parents'));
  }
  
  
  
}








?>