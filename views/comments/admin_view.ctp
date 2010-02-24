<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Comment']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Comment']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Comment']['id'])); ?></div>
<h2><?php echo h($post['Post']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Comment']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Comment']['created']); ?>
</div>

<?php echo $post['Comment']['body']; ?>