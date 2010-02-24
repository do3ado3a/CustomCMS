<div class="record">
<div class="content">
  <div class="type newsletter">Newsletter</div>
  <span class="title"><?php echo h($post['Newsletter']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Newsletters.newsletters') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($post['Newsletter']['body'], 300, '...', false, true); ?></span>
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Newsletter']['modified']); ?></div>
  <?php echo $this->element('admin/actions', array('controller' => 'newsletters', 'type' => 'Newsletter', 'post' => $post)) ?>
</div>
  <div class="clear-floats"></div>
</div>		