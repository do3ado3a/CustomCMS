<?php echo $this->element('admin/wysiwyg'); ?>

<h2><?php __('Add Album');?></h2>
<?php echo $form->create('Album');?>
<?php echo $this->element('admin/form_album'); ?>
<?php echo $form->end('Okay, I\'m done.');?>