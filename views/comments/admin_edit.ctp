<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Comment');?></h2>
<?php echo $form->create('Comment');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_comments'); ?>
<?php echo $form->end('Okay, I\'m done.');?>