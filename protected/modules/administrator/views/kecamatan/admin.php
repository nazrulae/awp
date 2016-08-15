<?php
$this->breadcrumbs=array(
	'Kelola Kecamatan'
);

$this->heading='Kelola Kecamatan';
?>
<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Data',$this->createUrl('kecamatan/create'),array('class'=>'btn btn-success')); ?>
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
'id'=>'kecamatan-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'type' => array('striped','hover'),
 'ajaxUpdate'=>false,
'columns'=>array(
array(
		'class'=>'booster.widgets.TbButtonColumn',
		'template'=>'{update}{delete}',

		'buttons'=>array
            (
		             
			   'update' => array
                (
                    'label'=>'Perbarui',
                    'icon'=>'pencil',
          
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs',
                    ),
                ),
				'delete' => array
                (
                    'label'=>'Hapus',
                    'icon'=>'trash',
					
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs delete',
                    ),
                )
			)
		),
			array(
            'header'=>'No',
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row + 1)',
			 'htmlOptions' => array(
                 
					'style'=>'width:50px;',
				
                   
                )
        ),
		'nama_kec',

),
)); ?>
