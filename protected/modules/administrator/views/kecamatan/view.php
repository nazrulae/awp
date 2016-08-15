<?php
$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->id_kec,
);

$this->menu=array(
array('label'=>'List Kecamatan','url'=>array('index')),
array('label'=>'Create Kecamatan','url'=>array('create')),
array('label'=>'Update Kecamatan','url'=>array('update','id'=>$model->id_kec)),
array('label'=>'Delete Kecamatan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kec),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kecamatan','url'=>array('admin')),
);
?>

<h1>View Kecamatan #<?php echo $model->id_kec; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_kec',
		'nama_kec',
),
)); ?>
