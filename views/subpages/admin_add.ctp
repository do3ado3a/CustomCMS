<?php echo $this->element('admin/wysiwyg'); ?>

<h2><?php __('Add Subpage');?></h2>
<?php echo $form->create('Subpage');?>
<?php echo $this->element('admin/form_subpages'); ?>
<?php echo $form->end('Creat Subpage.');?>