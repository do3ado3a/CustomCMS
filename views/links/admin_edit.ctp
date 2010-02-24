<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Link');?></h2>
<?php echo $form->create('Link');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_links'); ?>
<?php echo $form->end('Okay, I\'m done.');?>