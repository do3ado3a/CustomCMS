<h2><?php __('Newsletters');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Newsletters.newsletters')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'newsletter')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($posts as $post): ?>
  <?php echo $this->element('admin/newsletter', array('post' => $post)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
