<?php
$this->breadcrumbs=array(
	'Kelola Kecamatan'=>array('index'),
	'Tambah Data'
);

$this->heading='Tambah Kecamatan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>