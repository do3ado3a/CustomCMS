<?php

class RecordingComponent extends Object {
  
  var $controller = null;
  var $components = array('Cookie');
  var $settings = array();
  var $cookie = null;
  var $value = null;
  var $urlRedirect = null;
  
  function initialize(&$controller, $config)
  {
    $this->controller = $controller;
    $this->settings = array_merge(array('expires' => '7 days'), $config);
    if (empty($this->settings['urlRedirect'])) 
    {
      trigger_error(__("Recording::initialize() - Undefined 'urlRedirect' key in {$this->controller->name}Controller::{\$components['Recording']}", true), E_USER_WARNING); 
    }
    $this->cookie = isset($this->controller->params['named']['cookie']) ? $this->controller->params['named']['cookie'] : null;
    $this->value = isset($this->controller->params['named']['value']) ? $this->controller->params['named']['value'] : null;
    $this->urlRedirect = $this->settings['urlRedirect'];
    //pr($this->controller->params);
    //exit();
  }
  
  function startup(&$controller)
  {
    $controller->autoRender = null;
  }
  
  function redirect()
  {
    $ref = env('HTTP_REFERER');
    if (isset($ref)) 
    {
      $this->controller->redirect($ref, null, true);
    }
    elseif (isset($this->urlRedirect)) 
    {
      $this->controller->redirect($this->urlRedirect, null, true);
    }
  }

  function save($expires = null)
  {
    if (isset($expires)) 
    {
      $this->settings['expires'] = $expires;
    }
    if ($this->__cookieValid($this->cookie, $this->value)) 
    {
      $this->__record($this->cookie, $this->value, $this->settings['expires']);
      return true;
    }
    return false;
  }


  # Privates
  function __record($cookie, $value, $expires)
  {
    $this->Cookie->write($cookie, $value, true, $expires);
  }

  function __cookieValid($cookie, $value)
  {
    if (isset($this->settings['cookies'][$cookie]) && in_array($value, $this->settings['cookies'][$cookie])) 
    {
      return true;
    }
    return false;
  }


  
}

?>