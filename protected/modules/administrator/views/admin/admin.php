<?php
$this->breadcrumbs=array(
	'Kelola Admin'
);

$this->heading='Kelola Admin';
?>
<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Data',$this->createUrl('admin/create'),array('class'=>'btn btn-success')); ?>
<?php
if(Yii::app()->user->hasFlash('berhasil')){
	echo'
	
	<br/>
	<br/>
    <div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
        '.Yii::app()->user->getFlash('berhasil').'
    </div>';
}
?>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'admin-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'type' => array('striped','hover'),
'columns'=>array(
		array(
            'header'=>'No',
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row + 1)',
        ),
		'nama',
		'username',
		'password',
array(
		'class'=>'booster.widgets.TbButtonColumn',
		'template'=>'{view}{update}{delete}',

		'buttons'=>array
            (
			'view' => array
                (
                    'label'=>'Detail',
                    'icon'=>'search',
          
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs',
                    ),
                ),               
			   'update' => array
                (
                    'label'=>'Update',
                    'icon'=>'pencil',
          
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs',
                    ),
                ),
				'delete' => array
                (
                    'label'=>'Delete',
                    'icon'=>'trash',
					'visible'=>'(Yii::app()->user->id== $data->id_admin)? false : true',
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs delete',
                    ),
                )
			)
		),
),
)); ?>
