<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_kel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kel),array('view','id'=>$data->id_kel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kec')); ?>:</b>
	<?php echo CHtml::encode($data->id_kec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kel')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_radius')); ?>:</b>
	<?php echo CHtml::encode($data->id_radius); ?>
	<br />


</div>