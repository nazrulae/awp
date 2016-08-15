<?php
$this->breadcrumbs=array(
	'Kelola Admin'=>array('index'),
	'Detail Admin'
);

$this->heading='Detail Admin';
?>


<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
	
		'nama',
		'username',
		'password',
),
)); ?>
