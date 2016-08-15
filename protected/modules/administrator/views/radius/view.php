<?php
$this->breadcrumbs=array(
	'Radiuses'=>array('index'),
	$model->id_radius,
);

$this->menu=array(
array('label'=>'List Radius','url'=>array('index')),
array('label'=>'Create Radius','url'=>array('create')),
array('label'=>'Update Radius','url'=>array('update','id'=>$model->id_radius)),
array('label'=>'Delete Radius','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_radius),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Radius','url'=>array('admin')),
);
?>

<h1>View Radius #<?php echo $model->id_radius; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_radius',
		'kategori_radius',
		'nilai_radius',
),
)); ?>
