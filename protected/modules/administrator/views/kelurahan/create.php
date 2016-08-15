<?php
$this->breadcrumbs=array(
	'Kelola Kelurahan/Desa'=>array('index'),
	'Tambah Data'
);

$this->heading='Tambah Kelurahan/Desa';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>