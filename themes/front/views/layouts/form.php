<?php $this->beginContent('//layouts/login'); ?>
<div class="row">
            
			<div class="col-md-4 col-md-offset-4">
			<center><h3 style="color:white"> <?php echo CHtml::encode(Yii::app()->name); ?></h3></center>
			<br/>
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        
                            <fieldset>
		  
        			<?php echo $content; ?>
	 </fieldset>
                        
                    </div>
                </div>
            </div>
        </div>
<?php $this->endContent(); ?>
