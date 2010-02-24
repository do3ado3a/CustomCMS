<h2><?php __('Media');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Media.media')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'media')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($posts as $post): ?>
  <?php echo $this->element('admin/media', array('post' => $post)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
