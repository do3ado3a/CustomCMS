<h2><?php __('Add User');?></h2>
<?php echo $form->create('User');?>
    <?php echo $this->element('admin/form_users') ?>
     <?php echo $form->input('password'); ?>
<?php echo $form->end('Okay I\'m done');?>
