<h2><?php __('Comments');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Comments.comments')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'comment')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($posts as $post): ?>
  <?php echo $this->element('admin/comment', array('post' => $post)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
