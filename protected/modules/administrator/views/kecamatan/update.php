<?php
$this->breadcrumbs=array(
	'Kelola Kecamatan'=>array('index'),
	'Perbarui Data'
);

$this->heading='Perbarui Kecamatan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>