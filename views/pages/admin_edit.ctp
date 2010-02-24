<?php echo $this->element('admin/wysiwyg'); ?>
<h2><?php __('Edit Page');?></h2>
<?php echo $form->create('Page');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_pages'); ?>
<?php echo $form->end('Save Changes');?>