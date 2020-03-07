<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  

  <title><?php echo $title; ?></title>

  <script src="<?php echo base_url();?>assets/lib/jquery/js/jquery.min.js"></script>

    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>


  <script type="text/javascript">

    var BASE_URL = "<?php echo base_url(); ?>";

  </script>

</head>

</head>

<body>

	<?php echo $navbar; ?>
	<?php echo $content; ?>
	<?php echo $footer; ?>


 <!--  <script src="<?php //echo base_url();?>assets/lib/jquery/js/jquery.min.js"></script> -->

 <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

 <script src="<?php echo base_url();?>assets/js/map.js"></script>

</body>

</html>
