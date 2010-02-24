<div class="record">
<div class="content">
  <div class="type post">Page</div>
  <span class="title"><?php echo h($page['Page']['title']); ?></span>

    
    <span class="body"><?php echo $text->truncate($page['Page']['body'], 300, '...', false, true); ?></span>
    


  <div class="comments"><span class="comment-count"><?php echo $html->link($page['Page']['subpage_count'], array('controller' => $controller, 'action'=>'view', $page[$type]['id'])); ?></span></div>
  
  <?php echo $this->element('admin/pages_actions', array('controller' => 'pages', 'type' => 'Page', 'page' => $page)) ?>
</div>
  <div class="clear-floats"></div>
</div>		