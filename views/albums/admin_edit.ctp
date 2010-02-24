<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Album');?></h2>
<?php echo $form->create('Album');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_album'); ?>
<?php echo $form->end('Okay, I\'m done.');?>