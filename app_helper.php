<?php
class AppHelper extends Helper {
  
  var $helpers = array('Session');
  
  function totalWeeks($date)
  {
    $weeks = (time() - strtotime($date)) / 604800;
    return ($weeks < 1) ? 1 : number_format($weeks, 2);
  }
        
  function perWeek($total, $weeks)
  {
    return number_format(($total / $weeks), 2);
  } 
  
  function upOrDown($averageCount, $weekCount)
  {
    if ($averageCount == 0) return;
    $percentage = 0.0;
    $class = '';
    if ($weekCount > $averageCount) 
    {
      $percentage = number_format((($weekCount - $averageCount)/$weekCount * 100),2);
      $class = 'up';
    }
    else 
    {
      $percentage = number_format((($averageCount - $weekCount)/$averageCount * 100),2);
      $class = 'down';
    }
    return "<span class =\"{$class}\">{$percentage}</span>";
  } 
  
  function averagePerWeek($total, $date)
  {
    $weeks = $this->totalWeeks($date);
    return $this->perWeek($total, $weeks);
  }

  
  function toggleStatus($name, $value, $active = false)
  {
    $status = isset($this->params['named']['status']) ? $this->params['named']['status'] : null;
    $attr = ($status == $value || $active) ? array('class' => 'active') : null;
    $url = ($value != 'all') ? array('action' => 'index', 'status' => $name) : array('action' => 'index');
    return $this->link($name, $url, $attr);
  }
  
	function user($key) {
		$user = $this->Session->read('Auth.User');
			if (isset($user[$key])) {
				return $user[$key];
			}
		return false;
	}  
  
}
?>