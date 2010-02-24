<div class="record">
<div class="content">
  <div class="type post">Post</div>
  <span class="title"><?php echo h($post['Post']['title']); ?></span>
  <span class="author">Author <?php echo h($post['User']['name']); ?></span>
  <?php if ($cookie->read('Posts.posts') == 'expanded'): ?>
    
    <span class="body"><?php echo $text->truncate($post['Post']['body'], 300, '...', false, true); ?></span>
    
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($post['Post']['modified']); ?></div>
  <div class="tags"><?php echo $taggable->stringTagsToLinks(h($post['Post']['tags']), array(), array('class' => 'tag')); ?></div>
  <div class="comments"><span class="comment-count"><?php echo $html->link($post['Post']['comment_count'], array('controller' => $controller, 'action'=>'view', $post[$type]['id'])); ?></span></div>
  <?php echo $this->element('admin/actions', array('controller' => 'posts', 'type' => 'Post', 'post' => $post)) ?>
</div>
  <div class="clear-floats"></div>
</div>		