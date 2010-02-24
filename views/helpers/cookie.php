<?php
App::import('Component', 'Cookie');
class CookieHelper extends AppHelper {
  
  function read($key)
  {
    $cookie = new CookieComponent();
    $cookie->key = Configure::read('Security.salt');
    $value = $cookie->read($key);
    if (isset($value)) 
    {
      return $value;
    }
    return false;
  }
  
}

?>