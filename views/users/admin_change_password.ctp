<h2><?php __('Change user password');?></h2>
<?php echo $form->create('User', array('controller' => 'users', 'action' => 'admin_change_password'));?>
  <?php echo $form->input('id'); ?>
   <?php echo $form->input('old_password'); ?>
      <?php echo $form->input('password', array('label' => 'New Password')); ?>
<?php echo $form->end('Okay I\'m done');?>
