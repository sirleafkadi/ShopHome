<?php 
  $curpage=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  if($curpage=="index.php"){ $path="src";  }
?>




	<script src="<?php echo $path?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo $path?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $path?>/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo $path?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo $path?>/js/jquery.nicescroll.min.js"></script>
	<script src="<?php echo $path?>/js/jquery.zoom.min.js"></script>
	<script src="<?php echo $path?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo $path?>/js/main.js"></script>