<?php
$this->breadcrumbs=array(
	'Konfigurasis',
);

$this->menu=array(
array('label'=>'Create Konfigurasi','url'=>array('create')),
array('label'=>'Manage Konfigurasi','url'=>array('admin')),
);
?>

<h1>Konfigurasis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
