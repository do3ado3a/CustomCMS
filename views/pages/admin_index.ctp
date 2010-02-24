<h2><?php __('Pages');?></h2>

<?php echo $this->element('admin/toggle_views', array('cookieName' => 'Pages.pages')); ?>
<?php echo $this->element('admin/toggle_statuses', array('count' => 'page')); ?>
<?php echo $this->element('admin/form_search'); ?>

<div class="clear-floats"></div>
<?php foreach ($pages as $page): ?>
  <?php echo $this->element('admin/page', array('page' => $page)); ?>
<?php endforeach; ?>

<?php echo $this->element('admin/pagination') ?>
