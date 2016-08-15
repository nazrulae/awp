<?php
/* @var $this SiteController */



$this->breadcrumbs=array(
	'Grafik Pola Data Gizi',
	'Status Ekonomi'
);
$this->heading="Grafik Pola Data Gizi Berdasarkan Status Ekonomi";
?>





<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Pola Data Gizi Berdasarkan Status Gizi'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
		</script>
	</head>
	<body>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modules/data.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<?php
$criteria=new CDbCriteria;
$criteria->select='id_status_ekonomi,count(id_status_ekonomi) as jumlah,id_kelas';
$criteria->group="id_kelas, id_status_ekonomi";
$data=Balita::model()->findAll($criteria);
foreach($data as $data){
$nilai[$data->id_kelas][$data->id_status_ekonomi]=$data->jumlah;
}



?>
<br/>
<br/>
<h3>Tabel Pola Data Gizi Berdasarkan Status Ekonomi</h3>
<table id="datatable" class="item table">
	<thead>
		<tr>
			<th></th>
			<?php
			$status=StatusEkonomi::model()->findAll(array('order'=>'id_status_ekonomi asc'));
			
			foreach($status as $status){
			?>
			<th><?php echo $status->status_ekonomi;?></th>
			<?php
			}
			?>
		</tr>
	</thead>
	<tbody>
	<?php
	$kelas=Kelas::model()->findAll(array('order'=>'id_kelas asc'));
	foreach($kelas as $kelas){
	?>
		<tr>
			<th><?php echo $kelas->kelas;?></th>
			<?php 
			$status=StatusEkonomi::model()->findAll(array('order'=>'id_status_ekonomi asc'));
			
			foreach($status as $status){
			?>
			<td><?php 
			if(!empty($nilai[$kelas->id_kelas][$status->id_status_ekonomi])){
			echo $nilai[$kelas->id_kelas][$status->id_status_ekonomi];
			}else{
			echo '0';
			}
			?></td>
			
			<?php
			}
			?>
			
		</tr>
	<?php
	}
	?>	
	</tbody>
</table>