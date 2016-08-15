<?php
$this->breadcrumbs=array(
	'Kelola Admin'=>array('index'),
	'Tambah Data'
);

$this->heading='Tambah Admin';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>