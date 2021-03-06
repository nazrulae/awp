<?php
$this->breadcrumbs=array(
	'Kelola Kelurahan/Desa'
);

$this->heading='Kelola Kelurahan/Desa';
?>
<?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah Data',$this->createUrl('kelurahan/create'),array('class'=>'btn btn-success')); ?>
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
'id'=>'kelurahan-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
 'ajaxUpdate'=>false,
 'type' => array('striped','hover'),
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
				
                   
                ),
				),
		'nama_kel',
		array(
            'header'=>'Nama Kecamatan',
            'value' => '$data->idKec->nama_kec',
			'name'=>'id_kec',
			'filter'=>$model->getKecamatan(),
		
				),
				
		
		array(
            'header'=>'Radius',
            'value' => '$data->idRadius->kategori_radius." - "."Rp. ".number_format($data->idRadius->nilai_radius,0,",",".")',
			'name'=>'id_radius',
			'filter'=>$model->getRadius2(),
				),
			

),
)); ?>
