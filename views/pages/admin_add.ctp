<?php echo $this->element('admin/wysiwyg'); ?>

<h2><?php __('Add Page');?></h2>
<?php echo $form->create('Page');?>
<?php echo $this->element('admin/form_pages'); ?>
<?php echo $form->end('Create page');?>