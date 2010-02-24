<div class="record">
<div class="content">
  <div class="type link">Link</div>
  <span class="title"><?php echo h($post['Link']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Links.links') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($post['Link']['body'], 300, '...', false, true); ?></span>
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Link']['modified']); ?></div>
  <?php echo $this->element('admin/actions', array('controller' => 'links', 'type' => 'Link', 'post' => $post)) ?>
</div>
  <div class="clear-floats"></div>
</div>		