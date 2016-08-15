<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><?php $judul=Konfigurasi::model()->findByPk('1'); echo $judul->nilai_konfigurasi?></a>
        </div>
		<?php
			if(Yii::app()->controller->id=="admin"){
				$pengguna='class="active"';
				
			}elseif(Yii::app()->controller->id=="konfigurasi"){
				$konfigurasi='class="active"';
				
			}elseif(Yii::app()->controller->id=="kecamatan"){
				$master='active open"';
				$kecamatan='class="active"';
			}elseif(Yii::app()->controller->id=="kelurahan"){
				$master='active open"';
				
			}elseif(Yii::app()->controller->id=="radius"){
				$master='active open"';
				$radius='class="active"';
			}else{
				
				$home='class="active"';
			}
			
			?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php  echo $home;?>>
			<a href="<?php echo $this->createUrl('default/index'); ?>">
			<i class="fa fa-home"></i>
			Beranda
			</a>
			</li>
		
			<li class="dropdown <?php  echo $master;?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Data Master <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li ><a href="<?php echo $this->createUrl('radius/'); ?>" >Kategori Raidus</a></li>
                <li ><a href="<?php echo $this->createUrl('kecamatan/'); ?>" >Kecamatan</a></li>
                <li ><a href="<?php echo $this->createUrl('kelurahan/'); ?>" >Kelurahan</a></li>
              
                
              </ul>
            </li>
            <li <?php  echo $pengguna;?>><a href="<?php echo $this->createUrl('admin/'); ?>"><i class="fa fa-user"></i> Data Pengguna</a></li>
            <li <?php  echo $konfigurasi;?>><a href="<?php echo $this->createUrl('konfigurasi/'); ?>"><i class="fa fa-wrench"></i> Konfigurasi Website</a></li>
            
            <li><a href="<?php echo $this->createUrl('default/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
           
       
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo Yii::app()->user->name;?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
               
                <li class="divider"></li>
                <li><a href="<?php echo $this->createUrl('default/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
		  
		  
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
	  
	
	<?php echo $content ?>
	
	
	 </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.js"></script>-->
    <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>-->

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morris/chart-data-morris.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tablesorter/tables.js"></script>

  </body>
</html>
