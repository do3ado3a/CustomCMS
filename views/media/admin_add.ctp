<?php echo $this->element('admin/wysiwyg'); ?>

<h2><?php __('Add Media');?></h2>
<?php echo $form->create('Media', array('type' => 'file'));?>
<?php echo $this->element('admin/form_media'); ?>
<?php echo $form->end('Okay, I\'m done.');?>