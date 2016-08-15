	<?php
	$cs = Yii::app()->clientScript;

	$cs->scriptMap['bootstrap.min.css'] = false;
	$cs->scriptMap['bootstrap.min.js']  = false;
	$cs->scriptMap['bootstrap-yii.css'] = false;
	?>
	  <html lang="en">
  <head>
	<title><?php $judul=Konfigurasi::model()->findByPk('1'); echo $judul->nilai_konfigurasi;?></title>
<meta content='<?php $judul=Konfigurasi::model()->findByPk('2'); echo $judul->nilai_konfigurasi;?>' name='description'/>

<meta content='<?php $judul=Konfigurasi::model()->findByPk('3'); echo $judul->nilai_konfigurasi;?>' name='keywords'/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"> </link>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.autocomplete.js'></script>
    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet"></link>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/navbar.css" rel="stylesheet"> </link>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/loading.css" rel="stylesheet"></link>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/paging.css" rel="stylesheet"></link>
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.autocomplete.css" />
	 <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris-0.4.3.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqfusioncharts.js"></script>
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/front.js"></script>
	 <script>
	 $(document).ready(function() {
		$('.datepicker').datepicker({format:'yyyy-mm-dd'});
	 });
	 </script>
  </head>

  <body>
  <div class="head">
		
	<? /*	<div class="container">
			<div class="row">
				<div class="col-xs-12 no-padding">
					<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/header2.png" class="img-responsive" />
				</div>
				
			</div>
		</div> */ ?>
	</div>
	<div class="container shadow">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="navbar navbar-default"  style="margin-bottom:0">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#">Navigasi</a>
					</div>
					<div class="navbar-collapse collapse">
					  <ul class="nav navbar-nav">
					  		<?php
				if(Yii::app()->controller->id=="radius" ){
				$radius='class="active"';
				}else{
				
							$home='class="active"';
						}
				
				
				
				
				?>
					  
						<li <?php echo $home;?>><a href="<?php echo $this->createUrl('site/index');?>">Hitung Panjar</a></li>
						
						
						<li <?php echo $radius;?>><a href="<?php echo $this->createUrl('radius/');?>">Informasi Radius</a></li>
						
						
						  </ul>
					</div><!--/.nav-collapse -->
				  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="main-content">
					<div class="content">
	
	<?php echo $content ?>
	
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
						<b style="font-size:13pt"><?php $judul=Konfigurasi::model()->findByPk('4'); echo $judul->nilai_konfigurasi;?></b>				</div>
				</div>
			</div>
		</div>
	</div>
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script>
   
    
	<!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/dataTables/dataTables.bootstrap.js"></script>
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/raphael-2.1.0.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morris.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>


	
  </body>
</html>
	
