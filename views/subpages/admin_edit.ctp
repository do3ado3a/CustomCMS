<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Subpage');?></h2>
<?php echo $form->create('Subpage');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_subpages'); ?>
<?php echo $form->end('Save Subpage.');?>