<?php
$this->breadcrumbs=array(
	'Kelurahans'=>array('index'),
	$model->id_kel,
);

$this->menu=array(
array('label'=>'List Kelurahan','url'=>array('index')),
array('label'=>'Create Kelurahan','url'=>array('create')),
array('label'=>'Update Kelurahan','url'=>array('update','id'=>$model->id_kel)),
array('label'=>'Delete Kelurahan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kel),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kelurahan','url'=>array('admin')),
);
?>

<h1>View Kelurahan #<?php echo $model->id_kel; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_kel',
		'id_kec',
		'nama_kel',
		'id_radius',
),
)); ?>
