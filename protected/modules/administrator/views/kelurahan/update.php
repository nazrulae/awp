<?php
$this->breadcrumbs=array(
	'Kelola Kelurahan/Desa'=>array('index'),
	'Perbarui Data'
);

$this->heading='Perbarui Kelurahan/Desa';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>