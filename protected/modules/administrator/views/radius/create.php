<?php
$this->breadcrumbs=array(
	'Kelola Radius'=>array('index'),
	'Tambah Data'
);

$this->heading='Tambah Radius';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>