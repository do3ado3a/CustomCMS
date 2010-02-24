<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $page['Page']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $page['Page']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $page['Page']['id'])); ?></div>
<h2><?php echo h($page['Page']['title']); ?> - <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($page['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($page['Page']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($page['Page']['created']); ?>
</div>

<?php echo $page['Page']['body']; ?>
<br /> <br />
<h2> <?php echo $page['Page']['subpage_count']; ?> Subpages</h2>

<?php foreach ($page['Subpage'] as $subpage): ?>
  <?php $page['Subpage'] = $subpage; ?>
  <?php echo $this->element('admin/subpage', array('page' => $page)); ?>
<?php endforeach; ?>
