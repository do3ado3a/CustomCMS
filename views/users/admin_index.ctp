<h2><?php __('Users');?></h2>

<ul>
<?php foreach ($users as $user): ?>
			<li><?php echo $user['User']['name']; ?>
			<?php echo $html->link(__('edit', true), array('action'=>'edit', $user['User']['id'])); ?> | 
			<?php echo $html->link(__('change password', true), array('action'=>'change_password', $user['User']['id'])); ?> | 
			<?php echo $html->link(__('delete', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete User %s?', true), $user['User']['id'])); ?>
     </li>
<?php endforeach; ?>
</ul>

<?php echo $this->element('admin/pagination'); ?>