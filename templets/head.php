
<title>ShopHom</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Getting Current Page -->
<?php 
  $curpage=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  if($curpage=="index.php"){ $path="src";  }
?>


	<!-- Favicon -->
	<link href="<?php echo $path; ?>/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo $path; ?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/flaticon.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo $path; ?>/css/style.css"/>


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
