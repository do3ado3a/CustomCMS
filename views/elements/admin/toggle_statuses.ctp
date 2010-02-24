<?php  $statuses = $this->requestAction($this->params['controller'] . '/statuses'); ?>

<?php  $active = (empty($this->params['named']['status'])) ? true : false; ?>

<div id="search-status">
<ul>
<?php 
  $allCount = 0; $statusLinks = '';
  foreach ($statuses as $status):
  
   $statusLinks .= "<li>".$html->toggleStatus($status['Status']['name'], $status['Status']['name']) . " ( {$status['Status'][$count . '_count']} ) </li>";
   $allCount += $status['Status'][$count . '_count']; 
   
  endforeach;
?>

   <li><?php echo $html->toggleStatus('all', 'all', $active); ?> ( <?php echo $allCount; ?> ) <?php echo $statusLinks?></li>

</ul>
</div>	