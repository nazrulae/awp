<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_konfigurasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_konfigurasi),array('view','id'=>$data->id_konfigurasi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_konfigurasi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_konfigurasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_konfigurasi')); ?>:</b>
	<?php echo CHtml::encode($data->type_konfigurasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_konfigurasi')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_konfigurasi); ?>
	<br />


</div>