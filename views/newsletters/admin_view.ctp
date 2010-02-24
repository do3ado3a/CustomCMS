<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Newsletter']['id'])); ?> | <?php echo $html->link(__('send newsletter', true), array('action'=>'send', $post['Newsletter']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Newsletter']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Newsletter']['id'])); ?></div>
<h2><?php echo h($post['Newsletter']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Newsletter']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Newsletter']['created']); ?>
</div>

<span class="txt">
<?php echo nl2br(h($post['Newsletter']['body'])); ?>
</span>