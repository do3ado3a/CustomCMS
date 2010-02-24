<?php

class RedirectComponent extends Object {
  
  var $controller = null;
  
  var $components = array('Session');
  
  var $settings = array();
  
  var $success = null;
  
  var $warning = null;
  
  function initialize(&$controller, $config)
  {
    $this->controller = $controller;
    $this->settings = array_merge(array('success' => 'success', 'warning' => 'warning'), $config);
    $this->success = $this->settings['success'];
    $this->warning = $this->settings['warning'];
  }
  
  function flashSuccess($msg, $url = null)
  {
    $this->Session->setFlash(__($msg, true), $this->success);
    if (!empty($url)) 
    {
     $this->controller->redirect($url, null, true); 
    }
  }
  
  function flashWarning($msg, $url = null)
  {
    $this->Session->setFlash(__($msg, true), $this->warning);
    if (!empty($url)) 
    {
     $this->controller->redirect($url, null, true); 
    }
  }  
  
  function idEmpty($id, $url)
  {
    if (!$id && empty($this->controller->data)) {
			$this->flashWarning('Invalid Id. Please check your link.', $url);
		}
  }
  
  function urlToNamed()
  {
    $urlArray = $this->controller->params['url'];
    unset($urlArray['url']);
    if (!empty($urlArray)) 
    {
      $this->controller->redirect($urlArray, null, true);
    }
  }
  
  
  
  
}





?>