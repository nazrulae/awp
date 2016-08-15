<?php 	if($model->type_konfigurasi=='Uang'){?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/jquery.maskMoney.js" type="text/javascript"></script>

		<script type="text/javascript">
		$(document).ready(function(){
		
			
			$('#angka3').maskMoney({thousands:'.'});
			
		});
		</script>
<?php
}
?>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'konfigurasi-form',
	'enableAjaxValidation'=>false,
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<p class="help-block">Isian Dengan Tanda <span class="required">*</span> Wajib Diisi.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nama_konfigurasi',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>40)))); ?>

	

	<?php 
	if($model->type_konfigurasi=='Text'){
	echo $form->textFieldGroup($model,'nilai_konfigurasi',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>40)))); 
	}elseif($model->type_konfigurasi=='File'){
		echo $form->fileFieldGroup($model, 'nilai_konfigurasi',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
			));
		echo 'Format Gambar Harus .png<br/>Ukuran Gambar Header  971 x 177 px <br/> Ukuran Favicon 76 x 100 px <br/>Gambar Lama <br/><img src="'.Yii::app()->baseUrl.'/themes/front/images/'.$model->nilai_konfigurasi.'"  />' ;
		
	}elseif($model->type_konfigurasi=='Uang'){
		
	
	echo $form->textFieldGroup($model,'nilai_konfigurasi',array('prepend' => 'Rp.','widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','id'=>'angka3')))); 
	}
	?>
	<br/>
	<br/>

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
