<?php
$this->breadcrumbs=array(
	'Kelola Radius'
);

$this->heading='Kelola Radius';
?>
<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Data',$this->createUrl('radius/create'),array('class'=>'btn btn-success')); ?>
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
'id'=>'radius-grid',
'type' => array('striped','hover'),
'dataProvider'=>$model->search(),
'filter'=>$model,
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
		'kategori_radius',
		array(
			'header'=>'Nilai Radius',
			'name'=>'nilai_radius',
			'value'=>'"Rp. ". number_format($data->nilai_radius,0,",",".")'
		),
		
),
)); ?>
