<div class="record">
<div class="content">
  <div class="type media">Media</div>
  <span class="title"><?php echo h($post['Media']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Media.media') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($post['Media']['body'], 300, '...', false, true); ?></span>
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Media']['modified']); ?></div>
  <?php echo $this->element('admin/actions', array('controller' => 'media', 'type' => 'Media', 'post' => $post)) ?>
</div>
  <div class="clear-floats"></div>
</div>		