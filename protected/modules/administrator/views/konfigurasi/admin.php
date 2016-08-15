<?php
$this->breadcrumbs=array(
	'Konfigurasi Website'
);

$this->heading='Konfigurasi Website';
?>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'konfigurasi-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'type' => array('striped','hover'),
'columns'=>array(
	array(
		'class'=>'booster.widgets.TbButtonColumn',
		'template'=>'{view}{update}',

		'buttons'=>array
            (
		             
			    'view' => array
                (
                    'label'=>'Lihat',
                    'icon'=>'search',
          
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs',
                    ),
                ),
			   'update' => array
                (
                    'label'=>'Perbarui',
                    'icon'=>'pencil',
          
                    'options'=>array(
                        'class'=>'btn btn-default btn-xs',
                    ),
                ),
				
			)
		),
		'nama_konfigurasi',
	
		

),
)); ?>
