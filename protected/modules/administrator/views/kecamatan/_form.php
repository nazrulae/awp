<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'kecamatan-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Isian Dengan Tanda <span class="required">*</span> Wajib Diisi.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nama_kec',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>150)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Simpan' : 'Perbarui',
		)); ?>
	<?php $this->widget(
			'booster.widgets.TbButton',
			array('buttonType' => 'reset', 'label' => 'Batal','context' => 'success','htmlOptions'=>array('onclick'=>'self.history.back()'))
		); ?>	
</div>

<?php $this->endWidget(); ?>
