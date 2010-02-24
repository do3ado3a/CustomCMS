<?php echo $this->element('admin/wysiwyg'); ?>

<h2><?php __('Add Link');?></h2>
<?php echo $form->create('Link');?>
<?php echo $this->element('admin/form_links'); ?>
<?php echo $form->end('Okay, I\'m done.');?>