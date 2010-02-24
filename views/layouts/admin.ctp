<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('CustomCMS || '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('application');

		echo $scripts_for_layout;
	?>
</head>
<body class="<?php echo $this->params['controller']; ?>">



<!-- start wrapper -->
<div id="wrapper">
  
  <!-- start header -->	
  <div id="header">	
        
       <?php echo $html->link($html->image('logo.png', array('alt' => 'Who wants cake?')), array('controller' => 'dashboard', 'action' => 'index'), null, null, false); ?>

    
      <div id="user-nav">
        <ul>
          <li>Logged in as <?php echo $html->user('email'); ?> </li>
          <li><?php echo $html->link('My profile', array('controller' => 'users', 'action' => 'edit', $html->user('id'))) ?> | </li>
          <li><?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?></li>
        </ul>
      </div>

    
      <div id="nav">
         <ul class="left">
          <li id="dashboard"><?php echo $html->link('Dashboard', array('controller' => 'dashboard', 'action' => 'index')) ?></li>
          <li id="posts"><?php echo $html->link('Blog', array('controller' => 'posts', 'action' => 'index')) ?></li>
          <li id="comments"><?php echo $html->link('Comments', array('controller' => 'comments', 'action' => 'index')) ?></li>
          <li id="links"><?php echo $html->link('Links', array('controller' => 'links', 'action' => 'index')) ?></li>
          <li id="media"><?php echo $html->link('Media', array('controller' => 'media', 'action' => 'index')) ?></li>
          <li id="albums"><?php echo $html->link('Albums', array('controller' => 'albums', 'action' => 'index')) ?></li>
          <li id="newsletters"><?php echo $html->link('Newsletters', array('controller' => 'newsletters', 'action' => 'index')) ?></li>
        </ul>
      
        <ul class="right">
          <li id ="users"><?php echo $html->link('Users', array('controller' => 'users', 'action' => 'index')) ?></li>
        </ul>	
      </div>
    

    
    <div class="clear-floats"></div>
    
  </div>
  <!-- end header -->
  
  
  
  <!-- start sidebar -->
  <div id="sidebar">
    
    <div id="sub-nav">
      
      <div class="content">
      
        <div class="box">
          <h3>Actions</h3>
            <ul>
              <?php echo $this->element('admin/subnav_' . $this->params['controller']); ?>
            </ul>
        </div>
        
        <div class="box">

          <h3>Help</h3>
          <ul>
            <li><?php echo $html->link(__('Documentation', true), 'http://www.yougotrickrolled.com/', null, sprintf(__('This is a fake link to fill up space. If you continue no telling where you could end up.', true))); ?></li>
            <li><?php echo $html->link(__('Support Forum', true), 'http://www.youtube.com/watch?v=LoGYx35ypus', null, sprintf(__('yep another fake link. Continue at own risk.', true))); ?></li>
          </ul>
        </div>
        
      </div>
       
     </div>
    
  </div>
  <!-- end sidebar -->
  
  
  <!-- start main -->
  <div id="main">
    <?php $session->flash(); ?>
    <div class="content">
  
			<?php echo $content_for_layout; ?>
      
    </div>
    
  </div>
  <!-- end main -->
  
   <div class="clear-floats"></div>
   
    <!-- push the wrapper over the footer -->
    <div id="push"></div>
    
</div>
<!-- end wrapper -->

<div class="clear-floats"></div>

  <!-- start footer -->
  <div id="footer">
    
    <div id="inner-footer">
      <div class="content">
        <span class="powered-by">Powered by <strong>Your Name Goes Here</strong></span>
        <span class="version">Version 0.1</span>	
        <div class="clear-floats"></div>
      </div>	
          
    </div>
    
  </div>
  <!-- end footer -->  

</body>
</html>