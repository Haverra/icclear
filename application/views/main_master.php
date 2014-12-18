<!DOCTYPE html">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl">
<head>
<meta charset="utf-8" />
<head>
    <?php

    // EGROUP ICT ICCLCEAR


    ?>

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" 
          href="<?php echo base_url() . APPPATH; ?>css/normalize.css" />
    <link rel="stylesheet" type="text/css" 
          href="<?php echo base_url() . APPPATH; ?>css/skeleton.css" />      
    <link rel="stylesheet" href="<?php echo base_url() . APPPATH; ?>css/stijl.css">
<link rel="stylesheet" href="<?php echo base_url() . APPPATH; ?>css/slicknav.css">
     <script type="text/javascript">
        var site_url = '<?php echo site_url();?>';
	   var img_url = '<?php echo base_url() . APPPATH; ?>';
    </script>
<script src="<?php echo base_url() . APPPATH; ?>js/modernizr.min.js"></script>
</head>
<body>
    <nav>
<div id="nav">
<ul id="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Over ICClear</a></li>
    <li><a href="#">Inschrijven</a></li>
    <li><a href="#">Sessieoverzicht</a></li>
</ul>
</div>
</nav>
    <div id="hoofding"><?php echo $header; ?></div>
    <div id="inhoud"><?php echo $content; ?></div>
    <script src="<?php echo base_url() . APPPATH; ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() . APPPATH; ?>js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});
</script>
</body>
</html>