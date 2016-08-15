<?php
$this->breadcrumbs=array(
	'Konfigurasis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Konfigurasi','url'=>array('index')),
array('label'=>'Manage Konfigurasi','url'=>array('admin')),
);
?>

<h1>Create Konfigurasi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>