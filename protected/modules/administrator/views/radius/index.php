<?php
$this->breadcrumbs=array(
	'Radiuses',
);

$this->menu=array(
array('label'=>'Create Radius','url'=>array('create')),
array('label'=>'Manage Radius','url'=>array('admin')),
);
?>

<h1>Radiuses</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
