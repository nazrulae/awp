<?php
$this->breadcrumbs=array(
	'Konfigurasi Website'=>array('index'),
	'Detail '.$model->nama_konfigurasi
);

$this->heading='Detail '.$model->nama_konfigurasi;
?>

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
if($model->type_konfigurasi=='Uang'){
$model->nilai_konfigurasi="Rp. ". number_format($model->nilai_konfigurasi,0,",",".");
}
?>
<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		
		'nama_konfigurasi',
		
		array(
		'label'=>'Nilai Konfigurasi',
		'type'=>'raw',
		'value'=>($model->type_konfigurasi=='File')? '<img src="'.Yii::app()->baseUrl.'/themes/front/images/'.$model->nilai_konfigurasi.'" >' : $model->nilai_konfigurasi
		
		),
),
)); ?>
