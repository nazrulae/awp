<?php
/* @var $this SiteController */



$this->breadcrumbs=array(
	'Selamat Datang',
);
$this->heading="Selamat Datang";
$judul=Konfigurasi::model()->findByPk('1');
?>



Selamat Datang  Di Halaman Admin <?php echo $judul->nilai_konfigurasi;?>
