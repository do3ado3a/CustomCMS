 <?php $active = ($cookie->read($cookieName)  == null) ? true : false; ?>
 
 <div id="view">
        <ul>
          <li><?php echo $recording->toggleLink('List view', $cookieName, 'list', $active); ?> | </li>
          <li><?php echo $recording->toggleLink('Expanded view', $cookieName, 'expanded'); ?></li>
        </ul>
 </div>	