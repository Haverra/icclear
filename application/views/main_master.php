<!DOCTYPE html">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl">
<head>
<meta charset="utf-8" />
<head>
    <meta name="viewport" content="width=device-width">
    <?php

    // EGROUP ICT ICCLCEAR


    ?>

    <title><?php echo $title; ?></title>    
    <link rel="stylesheet" type="text/css" 
          href="<?php echo base_url() . APPPATH; ?>css/bootstrap.min.css" />   
    <link rel="stylesheet" type="text/css" 
          href="<?php echo base_url() . APPPATH; ?>css/jquery-ui.css" />
    <script src="<?php echo base_url() . APPPATH; ?>js/jquery.min.js"></script>
    <script type="text/javascript" 
            src="<?php echo base_url() . APPPATH; ?>js/jquery-ui.js"></script> 
     <script type="text/javascript">
        var site_url = '<?php echo site_url();?>';
	   var img_url = '<?php echo base_url() . APPPATH; ?>';
    </script>
</head>
<body>    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/home">Logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>      
      <ul class="nav navbar-nav navbar-right">
          <li><p class="navbar-text">Ingelogd als Derp</p></li>
        <li><a href="#">Uitloggen</a></li>        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
    <div id="hoofding"><?php echo $header; ?></div>
    <div id="inhoud"><?php echo $content; ?></div>
    </div>    
    <script src="<?php echo base_url() . APPPATH; ?>js/bootstrap.min.js"></script>    
</body>
</html>