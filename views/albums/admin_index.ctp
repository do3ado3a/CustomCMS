<h2><?php __('Album');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Albums.albums')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'comment')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($posts as $post): ?>
  <?php echo $this->element('admin/album', array('post' => $post)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
