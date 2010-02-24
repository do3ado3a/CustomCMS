<div class="options"><?php echo $html->link(__('edit', true), array('action'=>'edit', $page['Subpage']['id'])); ?> | <?php echo $html->link(__('delete', true), array('action'=>'delete', $page['Subpage']['id']), array('class' => 'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $page['Subpage']['id'])); ?></div>
<h2><?php echo h($page['Page']['title']); ?> -<?php echo h($page['Subpage']['title'])?> <span class="published">Published</span></h2>
<div class="info">
   <strong>Author</strong> 	<?php echo h($page['User']['name']); ?> <br/>
  <strong>Last Modified</strong> 	<?php echo $time->niceShort($page['Subpage']['modified']); ?> <br/>
  <strong>Published</strong> <?php echo $time->niceShort($page['Subpage']['created']); ?>
</div>

<?php echo $page['Subpage']['body']; ?>