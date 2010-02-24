<?php

class RecordingHelper extends AppHelper {
  
  var $helpers = array('Html','Cookie');
  
  function toggleLink($name, $cookie, $value, $active = false)
  {
    $cookieValue = $this->Cookie->read($cookie);
    $url = array('controller' => 'recordings', 'action' => 'toggle', 'admin' => 0, 'cookie' => $cookie, 'value' => $value );
    $attr = ($value == $cookieValue || $active) ? array('class' => 'active') : null;
    return  $this->Html->link($name, $url, $attr);
  }
  
  
  
}










?>