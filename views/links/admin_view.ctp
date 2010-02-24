<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Link']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Link']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Link']['id'])); ?></div>
<h2><?php echo h($post['Link']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Link']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Link']['created']); ?>
</div>

<?php echo $post['Link']['body']; ?>