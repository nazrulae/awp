<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_radius')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_radius),array('view','id'=>$data->id_radius)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_radius')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_radius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_radius')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_radius); ?>
	<br />


</div>