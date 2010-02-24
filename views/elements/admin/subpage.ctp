<div class="record">
<div class="content">
  <div class="type comment">Subpage</div>
  <span class="title"><?php echo h($page['Subpage']['title']); ?></span>
  <?php if ($cookie->read('Subpage.subpage') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($page['Subpage']['body'], 300, '...', false, true); ?></span>
  <?php endif ?>
  <div class="when"><?php echo $time->niceShort($page['Subpage']['modified']); ?></div>
  <?php echo $this->element('admin/actions', array('controller' => 'subpages', 'type' => 'Subpage', 'page' => $page)) ?>
</div>
  <div class="clear-floats"></div>
</div>		