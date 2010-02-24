<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Media']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Media']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Media']['id'])); ?></div>
<h2><?php echo h($post['Media']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Media']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Media']['created']); ?> <br/>
  <strong>Filename</strong> 	<?php echo (!empty($post['Media']['attachmentName'])) ? $post['Media']['attachmentName'] : 'no file' ; ?> <br/>
  <strong>Type</strong> 	<?php echo (!empty($post['Media']['attachmentType'])) ? $post['Media']['attachmentType'] : 'no type' ; ?>  <br/>
  <strong>Size</strong> 	<?php echo (!empty($post['Media']['attachmentName'])) ? $post['Media']['attachmentName'] : 'no name' ; ?>  <br/>
</div>

<?php echo $post['Media']['body']; ?>