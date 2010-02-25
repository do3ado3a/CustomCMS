<?php $controller = isset($controller) ? $controller : $this->params['controller']; ?>

<div class="record">
<div class="content">
  <div class="type post">Page</div>
  <span class="title"><?php echo h($page['Page']['title']); ?></span>

    <?php if ($cookie->read('Pages.pages') == 'expanded'): ?>
    <span class="body"><?php echo $text->truncate($page['Page']['body'], 300, '...', false, true); ?></span>
   <?php endif; ?> 
  
  <?php echo $this->element('admin/pages_actions', array('controller' => 'pages', 'type' => 'Page', 'page' => $page)) ?>
  
  	<div>
  		<br />
  		<br />
  		<?php if ($page['Page']['subpage_count'] > 0):  ?>
		<?php 
		if ($page['Page']['subpage_count'] <= 1 ) {
			echo "This page has " . $html->link($page['Page']['subpage_count'], array('action' => 'view', $page['Page']['id']), array('class' =>'subpageCount')) . " Subpage";
		} else {
			echo "This page has " .  $html->link($page['Page']['subpage_count'], array('action' => 'view', $page['Page']['id']), array('class' =>'subpageCount')) . " Subpages";
		}
		  
		
		?>
		<?php endif ?>
  	
  	</div>
</div>
  <div class="clear-floats"></div>
</div>		