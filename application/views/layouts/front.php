<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  

  <title><?php echo $title; ?></title>

  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <script type="text/javascript">

    var BASE_URL = "<?php echo base_url(); ?>";

  </script>

</head>

</head>

<body>

	<?php echo $navbar; ?>

	<!-- <h1>vista front</h1> -->
	<?php echo $content; ?>
	<?php echo $footer; ?>


<script src="<?php echo base_url();?>assets/lib/bootstrap/js/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
