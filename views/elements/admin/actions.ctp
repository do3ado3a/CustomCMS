<?php $controller = isset($controller) ? $controller : $this->params['controller']; ?>
<div class="actions">
<ul>
  <li><?php echo $html->link(__('view', true), array('controller' => $controller, 'action'=>'view', $post[$type]['id'])); ?> | </li>
  <li><?php echo $html->link(__('edit', true), array('controller' => $controller, 'action'=>'edit', $post[$type]['id'])); ?> | </li>
  <li><?php echo $html->link(__('delete', true), array('controller' => $controller, 'action'=>'delete', $post[$type]['id']), null, sprintf(__("Are you sure you want to delete {$type} %s?", true), $post[$type]['id'])); ?></li>
</ul>
</div>