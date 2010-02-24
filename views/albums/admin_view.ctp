



<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $post['Album']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $post['Album']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $post['Album']['id'])); ?></div>
<h2><?php echo h($post['Album']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($post['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($post['Album']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($post['Album']['created']); ?>
</div>

<?php echo $post['Album']['body']; ?>

<h2>( <?php echo $post['Album']['photo_count']; ?> ) Photos</h2>

<?php foreach ($post['Photo'] as $photo): ?>
 
  <?php echo $this->element('admin/photo',array('photo' => $photo)); ?>  

<?php endforeach ?>

<div class="clear-floats"></div>

<?php echo $form->create('Photo', array('type' => 'file', 'url' => '/admin/albums/view/'. $post['Album']['id']));?>
<?php echo $this->element('admin/form_photo'); ?>
<?php echo $form->input('parent_id', array('type' => 'hidden', 'value' => $post['Album']['id'] )); ?>
<?php echo $form->end('Okay, I\'m done');?>