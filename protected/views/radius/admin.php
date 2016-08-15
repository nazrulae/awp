<style>
.ct-form-control {
background-color: #FFFFFF;
background-image: none;
border: 1px solid #CCCCCC;
border-radius: 4px;
box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
color: #555555;
font-size: 14px;
height: 34px;
line-height: 1.42857;
padding: 6px 12px;
transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
min-width: 130px;
}
</style>


<div class="panel panel-primary">				
<div class="panel-heading"><span class="glyphicon glyphicon-list"></span> Tabel Informasi Radius Panjar <?php $judul=Konfigurasi::model()->findByPk('5'); echo $judul->nilai_konfigurasi;?></div>
<div class="panel-body">



				  <div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-search"></span> Tabel Informasi Radius Panjar <?php $judul=Konfigurasi::model()->findByPk('5'); echo $judul->nilai_konfigurasi;?></div>
		<div class="panel-body">
<?php
Yii::app()->language = 'id';
 $this->widget('booster.widgets.TbGridView',array(
'id'=>'kelurahan-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,

 'template'=>'{items}{summary}{pager}',
 'type' => array('striped','hover'),
'columns'=>array(
		
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