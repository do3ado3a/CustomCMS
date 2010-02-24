<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Post');?></h2>
<?php echo $form->create('Post');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_posts'); ?>
<?php echo $form->end('Okay, I\'m done.');?>