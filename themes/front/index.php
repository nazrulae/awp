<?php

include"config/koneksi.php";

include"lib/fungsi_string.php";
include"lib/fungsi_paging.php";
include"lib/fungsi_link.php";
include"lib/fungsi_imaging.php";
include"lib/fungsi_tag.php";
include"lib/fungsi_security.php";
include"lib/tgl_indo.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <link rel="shortcut icon" href="images/logo.png"> </link>
	
    <script src="js/jquery.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"></link>
	<link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"></link>
    <link href="css/navbar.css" rel="stylesheet"> </link>
    <link href="css/loading.css" rel="stylesheet"></link>
    <link href="css/paging.css" rel="stylesheet"></link>
	<link href="css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
	 <link href="css/morris-0.4.3.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

	<script type="text/javascript" src="js/jqfusioncharts.js"></script>
	
	<script src="js/bootstrap-datepicker.js"></script>
	 <script>
	 $(document).ready(function() {
		$('.datepicker').datepicker({format:'yyyy-mm-dd'});
	 });
	 </script>
  </head>

  <body>
  <div class="head">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 no-padding">
					<img src="images/header2.PNG" class="img-responsive" />
				</div>
				
			</div>
		</div>
	</div>
	<div class="container shadow">
		<div class="row">
			<div class="col-xs-12 no-padding">
				 <?php
					include"menu2.php";
				 ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="main-content">
					<div class="content">
				<?php
					switch($_GET['modul']){
					default;
					include"modul/default2.php";
					break;
					case "pencarian";
					include"modul/pencarian/pencarian.php";
					break;
					
					}
				 ?>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="foot">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 no-padding">
					<div class="footer">
						LSC &copy; <?php echo date('Y');?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
   
    
	<!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
	
	<script src="js/raphael-2.1.0.min.js"></script>
    <script src="js/morris.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>


	
  </body>
</html>