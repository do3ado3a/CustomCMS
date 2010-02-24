<h2><?php __('Subpages');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Subpages.subpages')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'subpage')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($pages as $page): ?>
  <?php echo $this->element('admin/subpage', array('page' => $page)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
