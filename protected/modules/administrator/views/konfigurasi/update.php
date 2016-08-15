<?php
$this->breadcrumbs=array(
	'Konfigurasi Website'=>array('index'),
	'Perbarui '.$model->nama_konfigurasi
);

$this->heading='Perbarui '.$model->nama_konfigurasi;
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>