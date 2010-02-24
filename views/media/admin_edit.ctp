<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Media');?></h2>
<?php echo $form->create('Media', array('type' => 'file'));?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_media'); ?>
<?php echo $form->end('Okay, I\'m done.');?>