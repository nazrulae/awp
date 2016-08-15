

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	
	
		<?php echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"Username")); ?>
		<?php echo $form->error($model,'username'); ?>
	
	<br/>
	
		
		<?php echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"Password")); ?>
		<?php echo $form->error($model,'password'); ?>
		
	
	<br/>
	
	<input type="submit" class="btn btn-lg btn-success btn-block" value="Login"/>

<?php $this->endWidget(); ?>

