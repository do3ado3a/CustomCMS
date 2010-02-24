

<div class="record">
	
<div class="content">
  <div class="type gallery">Album</div>
  <span class="title"><?php echo h($post['Album']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Albums.Albums') == 'expanded'): ?>
    
    <span class="body"><?php echo $text->truncate($post['Album']['body'], 300, '...', false, true); ?></span>
    
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Album']['modified']); ?></div>
   <?php echo $this->element('admin/actions', array('controller' => 'albums', 'type' => 'Album', 'post' => $post)) ?>
  <div class="clear-floats"></div>
</div>		
</div>