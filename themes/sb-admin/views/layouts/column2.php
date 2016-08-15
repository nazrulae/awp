<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
          <div class="col-lg-12">
		  <h1><?php echo $this->heading;?></h1>
            <ol class="breadcrumb">
            
			  <?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>CHtml::link('<i class="fa fa-home"></i> Beranda',Yii::app()->createUrl('admin/')),
				)); ?>
            </ol>
		  
        			<?php echo $content; ?>
	</div>
 </div><!-- /.row -->
<?php $this->endContent(); ?>
