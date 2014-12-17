<!DOCTYPE html">

<html xmlns="http://www.w3.org/1999/xhtml">
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
    <link rel="stylesheet" type="text/css" 
          href="<?php echo base_url() . APPPATH; ?>css/jquery-ui.css" />    
    <script type="text/javascript">
        var site_url = '<?php echo site_url();?>';
	   var img_url = '<?php echo base_url() . APPPATH; ?>';
    </script>
</head>
<body>
    <div id="hoofding"><?php echo $header; ?></div>
    <div id="inhoud"><?php echo $content; ?></div>
</body>
</html>