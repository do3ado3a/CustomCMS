<div class="record">
<div class="content">
  <div class="type comment">Comment</div>
  <span class="title"><?php echo h($post['Comment']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Comments.comments') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($post['Comment']['body'], 300, '...', false, true); ?></span>
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Comment']['modified']); ?></div>
  <?php echo $this->element('admin/actions', array('controller' => 'comments', 'type' => 'Comment', 'post' => $post)) ?>
</div>
  <div class="clear-floats"></div>
</div>		