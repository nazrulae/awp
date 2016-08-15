
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/jquery.maskMoney.js" type="text/javascript"></script>

		<script type="text/javascript">
		$(document).ready(function(){
		
			
			$('#angka3').maskMoney({thousands:'.'});
			
		});
		</script>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'radius-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Isian Dengan Tanda <span class="required">*</span> Wajib Diisi.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'kategori_radius',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>
	
	<?php
	
	echo $form->textFieldGroup($model,'nilai_radius',array('prepend' => 'Rp.','widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','id'=>'angka3')))); ?>

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


