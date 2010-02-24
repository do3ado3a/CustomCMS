<h2><?php __('Edit Newsletter');?></h2>
<?php echo $form->create('Newsletter');?>
<?php echo $form->input('id'); ?>
<?php echo $this->element('admin/form_newsletters'); ?>
<?php echo $form->end('Okay, I\'m done.');?>