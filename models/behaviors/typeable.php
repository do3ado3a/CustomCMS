<?php

class TypeableBehavior extends ModelBehavior {
  
  var $settings = array();
  
  
  function setup(&$model, $config = array())
  {
    $this->settings[$model->name] = array_merge(array('column'=> 'type'), $config);
  }
  
  function beforeFind(&$model, $query)
  {
    $query['conditions'][]["{$model->name}.{$this->settings[$model->name]['column']} = "] = $model->name;
    return $query;
  }
  
  function beforeSave(&$model)
  {
    $model->data[$model->name][$this->settings[$model->name]['column']] = $model->name;
    return true;
  }
  
  
}






?>