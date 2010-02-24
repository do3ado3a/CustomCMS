<?php

class TaggableHelper extends AppHelper {
  
  var $helpers = array('Html');
  var $separator  = ',';
  
  
  function link($tag, $url = array(), $attr = null)
  {
    return $this->Html->link($tag, array_merge(array('tag' => $tag), $url), $attr);
  }
  
  function stringTagsToLinks($tags = null, $url = array(), $attr = null)
  {
    $tags = explode($this->separator, $tags);
    $linkTags = '';
    $sep = '';
    foreach ($tags as $tag) 
    {
      $linkTags .= $sep . $this->link($tag, $url, $attr);
      $sep = $this->separator . ' ';
    }
    return $linkTags;
  }
  


}





?>