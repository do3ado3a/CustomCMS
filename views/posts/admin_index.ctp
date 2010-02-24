<h2><?php __('Posts');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Posts.posts')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'post')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($posts as $post): ?>
  <?php echo $this->element('admin/post', array('post' => $post)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
