<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Post']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Post']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Post']['id'])); ?></div>
<h2><?php echo h($post['Post']['title']); ?> - <span class="published">Published</span></h2>
<div class="tags-top"><?php echo $taggable->stringTagsToLinks(h($post['Post']['tags']), array(), array('class' => 'tag')); ?></div>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Post']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Post']['created']); ?>
</div>

<?php echo $post['Post']['body']; ?>

<h2> <?php echo $post['Post']['comment_count']; ?> Comments</h2>

<?php foreach ($post['Comment'] as $comment): ?>
  <?php $post['Comment'] = $comment; ?>
  <?php echo $this->element('admin/comment', array('post' => $post)); ?>
<?php endforeach; ?>
