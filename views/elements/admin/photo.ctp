<?php 
$str =  $post['Album']['title'];

$albumTitle = str_replace(" ", '', $post['Album']['title']); 

?>

<div class="photo">
  <?php echo $html->image("/files/small/{$photo['attachmentName']}", array('alt' => $photo['title'])); ?>

        <div class="actions">
          <ul>
            <li><?php echo $html->link(__('medium', true), "/files/medium/{$photo['attachmentName']}", array('class' => 'thickbox')); ?> | </li>
            <li><?php echo $html->link(__('large', true), "/files/large/{$photo['attachmentName']}", array('class' => 'thickbox')); ?> | </li>
            <li><?php echo $html->link(__('orig', true), "/files/{$photo['attachmentName']}", array('class' => 'thickbox')); ?></li>
          </ul>
        </div>

        <div class="actions">
          <ul>
            <li>(<?php echo $html->link(__('edit', true), array('controller' => 'photos', 'action'=>'edit', $photo['id'])); ?>  </li>
            <li><?php echo $html->link(__('delete', true), array('controller' => 'photos', 'action'=>'delete', $photo['id']), null, sprintf(__('Are you sure you want to delete photo %s?', true), $photo['id'])); ?>)</li>
          </ul>
        </div>      
        
  <div class="clear-floats"></div>
</div>