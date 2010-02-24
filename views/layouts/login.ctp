<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->pageTitle; ?></title>

    <?php 
        echo $html->css('application'); 
        echo $scripts_for_layout; 
       ?>

<script language="javascript" type="text/javascript">

  </script>
 
</head>
<body>
  
  <div id="login">
      <?php echo $html->image('logo.png'); ?>
      <?php echo $content_for_layout ?>  
  </div>
  

</body>
</html>