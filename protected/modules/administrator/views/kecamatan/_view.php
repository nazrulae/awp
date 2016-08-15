<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_kec')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kec),array('view','id'=>$data->id_kec)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kec')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kec); ?>
	<br />


</div>