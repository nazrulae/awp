<div class="panel panel-primary">				
<div class="panel-heading"><span class="glyphicon glyphicon-calendar"></span> Jadwal Sidang Pengadilan Agama Banyuwangi</div>
<div class="panel-body">



				  <div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-search"></span> Tampilkan Jadwal Sidang Berdasarkan</div>
		<div class="panel-body">
			
			 

	



<?php 

$this->widget('booster.widgets.TbGridView',array(
'id'=>'kelurahan-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,

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

	
			
			
	
			
			
			
				</div></div>




</div>
</div>