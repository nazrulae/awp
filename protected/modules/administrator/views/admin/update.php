<?php
$this->breadcrumbs=array(
	'Kelola Admin'=>array('index'),
	'Edit Data'
);

$this->heading='Edit Admin';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>