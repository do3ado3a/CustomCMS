<h2><?php __('Edit User');?></h2>
<?php echo $form->create('User');?>
  <?php echo $form->input('id'); ?>
  <?php echo $this->element('admin/form_users'); ?>
<?php echo $form->end('Okay I\'m done');?>
