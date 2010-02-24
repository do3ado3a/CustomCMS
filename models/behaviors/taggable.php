<?php

class TaggableBehavior extends ModelBehavior {
  
  var $settings = array();
  
  function setup(&$model, $config = array())
  {
    $this->settings[$model->name] = array_merge(array('label' => 'tags', 'separator' => ','), $config);
  }
  
  function beforeSave(&$model)
  {
    $tagIds = array();
    if (isset($model->data[$model->name][$this->settings[$model->name]['label']])) 
    {
      $tagStr = $model->data[$model->name][$this->settings[$model->name]['label']];
      foreach ($tags = $this->__stringTagsToArray($tagStr, $model->name) as $tag) 
    {
      $tagId = $this->__findTagId($tag, $model);
      if (!$tagId) 
      {
        $model->Tag->create();
        $model->Tag->save(array('name' => $tag));
        $tagId = $model->Tag->id;
      }
      $tagIds[] = $tagId;
    }
    
    $model->data['Tag']['Tag'] = $tagIds;
    $model->data[$model->name][$this->settings[$model->name]['label']] = $this->__arrayTagsToString($tags, $model->name);
  }
    return true;
  }
  
  function __stringTagsToArray($tagStr, $modelName)
  {
    $sep = $this->settings[$modelName]['separator'];
    $tags = preg_replace('/\s*' . $sep . '\s*/', $sep, rtrim(trim($tagStr), ' '.$sep));
    $tags = empty($tags) ? array() : explode($sep, strtolower($tags));
    sort($tags);
    return array_unique($tags);
  }
  
  function __arrayTagsToString($tags = array(), $modelName)
  {
    $strTags = '';
    $sep = '';
    foreach ($tags as $tag) 
    {
      $strTags .= $sep . $tag;
      $sep = $this->settings[$modelName]['separator'];
    }
    return $strTags;
  }
  
  function __findTagId($tag, $model)
  {
    $model->Tag->recursive = 0;
    return $model->Tag->field('id', array('Tag.name =' => $tag));
  }
  
  
  
}

?>