<?php $controller = isset($controller) ? $controller : $this->params['controller']; ?>
<div class="actions">
<ul>
  <li><?php echo $html->link(__('view', true), array('controller' => $controller, 'action'=>'view', $page[$type]['id'])); ?> | </li>
  <li><?php echo $html->link(__('edit', true), array('controller' => $controller, 'action'=>'edit', $page[$type]['id'])); ?> | </li>
  <li><?php echo $html->link(__('delete', true), array('controller' => $controller, 'action'=>'delete', $page[$type]['id']), null, sprintf(__("Are you sure you want to delete {$type} %s?", true), $page[$type]['id'])); ?></li>
</ul>
</div>