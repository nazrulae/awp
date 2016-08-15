<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/jquery.maskMoney.js" type="text/javascript"></script>

		<script type="text/javascript">
		$(document).ready(function(){
		
			
			$('#radiustb_pemohon,#radiustb_termohon,#radiustb_penggugat,#radiustb_tergugat').maskMoney({thousands:'.'});
			
		});
		</script>
<div class="panel panel-primary">				
<div class="panel-heading"><span class="glyphicon glyphicon-search"></span> <?php $judul=Konfigurasi::model()->findByPk('1'); echo $judul->nilai_konfigurasi;?></div>
<div class="panel-body">



				  <div class="panel panel-success">
		<div class="panel-heading"><span class="glyphicon glyphicon-search"></span> Hitung Panjar </div>
		<div class="panel-body">
			
			 
<div role="tabpanel border">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#berdasartgl" aria-controls="home" role="tab" data-toggle="tab">Cerai Talak (Yang Diajukan Suami)</a></li>
    <li role="presentation" class=""><a href="#berdasarbulan" aria-controls="profile" role="tab" data-toggle="tab">Cerai Gugat (Yang Diajukan Istri)</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade active in" id="berdasartgl">
	<br>
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Cerai Talak (Yang Diajukan Suami)</h3>
  </div>
  <div class="panel-body">
		
			<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pemohon (Suami)</h3>
  </div>
  <div class="panel-body">
			<div class="form-group">
				<label for="judul">Di Daerah Manakah Pemohon Tinggal?</label>
				<select name="posisi_pemohon" class="form-control" id="posisi_pemohon">
					<option value="">--Pilih Lokasi--</option>
					<option value="1">Dalam <?php $judul=Konfigurasi::model()->findByPk('6'); echo $judul->nilai_konfigurasi;?></option>
					<option value="2">Luar <?php echo $judul->nilai_konfigurasi;?></option>
				</select>
			 </div>
			 <div id="loader" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			 
			 <div class="form-group" style="display:none" id="kecamatan_pemohon_form">
				<label for="judul">Apakah Nama Kecamatan Pemohon Tinggal?</label>
				<select name="kecamatan_pemohon" class="form-control" id="kecamatan_pemohon" >
					<option value="">--Pilih Kecamatan--</option>
					<?php
					$kecamatan=Kecamatan::model()->findAll();
					foreach($kecamatan as $data){
					?>
					<option value="<?php echo $data->id_kec;?>"><?php echo $data->nama_kec;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
			 <div class="form-group" id="form_radiustb_pemohon" style="display:none"><label class="control-label required" for="Radius_nilai_radius">Berapa Nilai Radius (Termasuk Ongkos Kirim) ? (Silahkan Tanya Petugas Informasi) </label><div class="input-group"><span class="input-group-addon">Rp.</span><input class="span5 form-control" id="radiustb_pemohon" placeholder="Nilai Radius" name="Radius[nilai_radius]" type="text" value="" /></div></div>
			 
			 
			  <div id="loader2" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			  <div class="form-group" style="display:none" id="kelurahan_pemohon_form">
				<label for="judul">Apakah Nama Kelurahan/Desa Pemohon Tinggal?</label>
				<select name="kelurahan_pemohon" class="form-control" id="kelurahan_pemohon">
					<option value="">--Pilih Kelurahan/Desa--</option>
					<?php
					$kelurahan=Kelurahan::model()->findAll();
					foreach($kelurahan as $data){
					?>
					<option value="<?php echo $data->id_kel;?>"><?php echo $data->nama_kel;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
	  </div>
</div>
		
			<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Termohon (Istri)</h3>
  </div>
  <div class="panel-body">
			 <div class="form-group">
				<label for="judul">Di Daerah Manakah Termohon Tinggal?</label>
				<select name="posisi_termohon" class="form-control" id="posisi_termohon">
					<option value="">--Pilih Lokasi--</option>
					<option value="1">Dalam <?php echo $judul->nilai_konfigurasi;?></option>
					<option value="2">Luar <?php echo $judul->nilai_konfigurasi;?></option>
				</select>
			 </div>
			 <div id="loader3" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			 <div class="form-group" style="display:none" id="kecamatan_termohon_form">
				<label for="judul">Apakah Nama Kecamatan Termohon Tinggal?</label>
				<select name="kecamatan_termohon" class="form-control" id="kecamatan_termohon" >
					<option value="">--Pilih Kecamatan--</option>
					<?php
					$kecamatan=Kecamatan::model()->findAll();
					foreach($kecamatan as $data){
					?>
					<option value="<?php echo $data->id_kec;?>"><?php echo $data->nama_kec;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			  <div class="form-group" id="form_radiustb_termohon" style="display:none"><label class="control-label required" for="Radius_nilai_radius">Berapa Nilai Radius (Termasuk Ongkos Kirim) ? (Silahkan Tanya Petugas Informasi) </label><div class="input-group"><span class="input-group-addon">Rp.</span><input class="span5 form-control" id="radiustb_termohon" placeholder="Nilai Radius" name="Radius[nilai_radius]" type="text" value="" /></div></div>
			 
			 
			  <div id="loader4" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			  <div class="form-group" style="display:none" id="kelurahan_termohon_form">
				<label for="judul">Apakah Nama Kelurahan/Desa Termohon Tinggal?</label>
				<select name="kelurahan_termohon" class="form-control" id="kelurahan_termohon">
					<option value="">--Pilih Kelurahan/Desa--</option>
					<?php
					$kelurahan=Kelurahan::model()->findAll();
					foreach($kelurahan as $data){
					?>
					<option value="<?php echo $data->id_kel;?>"><?php echo $data->nama_kel;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
	  </div>
</div>
		
<button id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" type="submit" name="yt0">Hitung Panjar</button>
		
<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                Hitung Panjar Cerai Talak
				<button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Tutup</button>
            </div>
			
            <div class="modal-body">
			
               Rincian Biaya
			   
			    <div class="alert alert-danger" id="warning" style="display:none">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Warning, Ada Beberapa Isian Yang Masih Kosong
			</div>
                <table class="table" style="font-size:10pt">
                    <tr>
                        <td>Biaya Pendaftaran</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('7'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Redaksi</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('8'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Materai</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('9'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Biaya Proses</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('10'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Biaya Panggilan Pemohon (3 x Panggilan)</td>
                        
                    </tr>
					<tr>
                        <td >Lokasi   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id="lokasipemohon"></i></td>
                        
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td >Besarnya   &nbsp;&nbsp;&nbsp;<i id="besarpemohon"></i></td>
                       
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td>Jumlah Biaya Panggilan Pemohon</td>
                        <td>Rp.</td>
                        <td id="jumlahpemohon"></td>
                    </tr>
					  <tr>
                        <td colspan="3">Biaya Panggilan Termohon (3 x Panggilan)</td>
                        
                    </tr>
					<tr>
                        <td >Lokasi   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id="lokasitermohon"></i></td>
                        
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td >Besarnya   &nbsp;&nbsp;&nbsp;<i id="besartermohon"></i></td>
                       
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td>Jumlah Biaya Panggilan Termohon</td>
                        <td>Rp.</td>
                        <td id="jumlahtermohon"></td>
                    </tr>
					<tr>
                        <td><b>Jumlah Total Biaya Panjar</b></td>
                        <td><b>Rp.</b></td>
                        <td id="jumlahtotal"></td>
                    </tr>
                </table>
            </div>
			
			 
           
        </div>
    </div>
</div>



		
	  </div>
</div>

	
	</div>
    <div role="tabpanel" class="tab-pane  fade" id="berdasarbulan">
	<br>
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Cerai Gugat (Yang Diajukan Istri)</h3>
  </div>
  <div class="panel-body">
			
			<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Penggugat (Istri)</h3>
  </div>
  <div class="panel-body">
			<div class="form-group">
				<label for="judul">Di Daerah Manakah Penggugat Tinggal?</label>
				<select name="posisi_penggugat" class="form-control" id="posisi_penggugat">
					<option value="">--Pilih Lokasi--</option>
					<option value="1">Dalam <?php $judul=Konfigurasi::model()->findByPk('6'); echo $judul->nilai_konfigurasi;?></option>
					<option value="2">Luar <?php echo $judul->nilai_konfigurasi;?></option>
				</select>
			 </div>
			 <div id="loader5" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			 
			 <div class="form-group" style="display:none" id="kecamatan_penggugat_form">
				<label for="judul">Apakah Nama Kecamatan Penggugat Tinggal?</label>
				<select name="kecamatan_penggugat" class="form-control" id="kecamatan_penggugat" >
					<option value="">--Pilih Kecamatan--</option>
					<?php
					$kecamatan=Kecamatan::model()->findAll();
					foreach($kecamatan as $data){
					?>
					<option value="<?php echo $data->id_kec;?>"><?php echo $data->nama_kec;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
			 <div class="form-group" id="form_radiustb_penggugat" style="display:none"><label class="control-label required" for="Radius_nilai_radius">Berapa Nilai Radius (Termasuk Ongkos Kirim) ? (Silahkan Tanya Petugas Informasi) </label><div class="input-group"><span class="input-group-addon">Rp.</span><input class="span5 form-control" id="radiustb_penggugat" placeholder="Nilai Radius" name="Radius[nilai_radius]" type="text" value="" /></div></div>
			 
			 
			  <div id="loader6" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			  <div class="form-group" style="display:none" id="kelurahan_penggugat_form">
				<label for="judul">Apakah Nama Kelurahan/Desa Penggugat Tinggal?</label>
				<select name="kelurahan_penggugat" class="form-control" id="kelurahan_penggugat">
					<option value="">--Pilih Kelurahan/Desa--</option>
					<?php
					$kelurahan=Kelurahan::model()->findAll();
					foreach($kelurahan as $data){
					?>
					<option value="<?php echo $data->id_kel;?>"><?php echo $data->nama_kel;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
	  </div>
</div>
		
			<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Tergugat (Suami)</h3>
  </div>
  <div class="panel-body">
			 <div class="form-group">
				<label for="judul">Di Daerah Manakah Tergugat Tinggal?</label>
				<select name="posisi_tergugat" class="form-control" id="posisi_tergugat">
					<option value="">--Pilih Lokasi--</option>
					<option value="1">Dalam <?php echo $judul->nilai_konfigurasi;?></option>
					<option value="2">Luar <?php echo $judul->nilai_konfigurasi;?></option>
				</select>
			 </div>
			 <div id="loader7" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			 <div class="form-group" style="display:none" id="kecamatan_tergugat_form">
				<label for="judul">Apakah Nama Kecamatan Tergugat Tinggal?</label>
				<select name="kecamatan_tergugat" class="form-control" id="kecamatan_tergugat" >
					<option value="">--Pilih Kecamatan--</option>
					<?php
					$kecamatan=Kecamatan::model()->findAll();
					foreach($kecamatan as $data){
					?>
					<option value="<?php echo $data->id_kec;?>"><?php echo $data->nama_kec;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			  <div class="form-group" id="form_radiustb_tergugat" style="display:none"><label class="control-label required" for="Radius_nilai_radius">Berapa Nilai Radius (Termasuk Ongkos Kirim) ? (Silahkan Tanya Petugas Informasi) </label><div class="input-group"><span class="input-group-addon">Rp.</span><input class="span5 form-control" id="radiustb_tergugat" placeholder="Nilai Radius" name="Radius[nilai_radius]" type="text" value="" /></div></div>
			 
			 
			  <div id="loader8" style="display:none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/load.gif"></div>
			  <div class="form-group" style="display:none" id="kelurahan_tergugat_form">
				<label for="judul">Apakah Nama Kelurahan/Desa Tergugat Tinggal?</label>
				<select name="kelurahan_tergugat" class="form-control" id="kelurahan_tergugat">
					<option value="">--Pilih Kelurahan/Desa--</option>
					<?php
					$kelurahan=Kelurahan::model()->findAll();
					foreach($kelurahan as $data){
					?>
					<option value="<?php echo $data->id_kel;?>"><?php echo $data->nama_kel;?></option>
					<?php
					}
					?>
				</select>
			 </div>
			 
	  </div>
</div>
		
<button id="submitBtn2" data-toggle="modal" data-target="#confirm-submit2" class="btn btn-primary" type="submit" name="yt0">Hitung Panjar</button>

		
</div>

 <div class="modal fade" id="confirm-submit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Hitung Panjar Cerai Gugat
				<button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Tutup</button>
            </div>
			
            <div class="modal-body">
			
               Rincian Biaya
			   
			    <div class="alert alert-danger" id="warning2" style="display:none">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Warning, Ada Beberapa Isian Yang Masih Kosong
			</div>
                <table class="table" style="font-size:10pt">
                             <tr>
                        <td>Biaya Pendaftaran</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('7'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Redaksi</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('8'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Materai</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('9'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
					<tr>
                        <td>Biaya Proses</td>
                        <td>Rp.</td>
                        <td><?php $judul=Konfigurasi::model()->findByPk('10'); echo number_format($judul->nilai_konfigurasi,0,",",".");?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Biaya Panggilan Penggugat (3 x Panggilan)</td>
                        
                    </tr>
					<tr>
                        <td >Lokasi   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id="lokasipenggugat"></i></td>
                        
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td >Besarnya   &nbsp;&nbsp;&nbsp;<i id="besarpenggugat"></i></td>
                       
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td>Jumlah Biaya Panggilan Penggugat</td>
                        <td>Rp.</td>
                        <td id="jumlahpenggugat"></td>
                    </tr>
					  <tr>
                        <td colspan="3">Biaya Panggilan Tergugat (3 x Panggilan)</td>
                        
                    </tr>
					<tr>
                        <td >Lokasi   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id="lokasitergugat"></i></td>
                        
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td >Besarnya   &nbsp;&nbsp;&nbsp;<i id="besartergugat"></i></td>
                       
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td>Jumlah Biaya Panggilan Tergugat</td>
                        <td>Rp.</td>
                        <td id="jumlahtergugat"></td>
                    </tr>
					<tr>
                        <td><b>Jumlah Total Biaya Panjar</b></td>
                        <td><b>Rp.</b></td>
                        <td id="jumlahtotal2"></td>
                    </tr>
                </table>
            </div>
			
			 
           
        </div>
    </div>
</div>


</div>

</div>
   </div>

</div>
	

		
		
	
			
			
	
			
			
			
			</div></div>




</div>
</div>


<script type="text/javascript">
/* script cerai talak*/
$(document).ready(function(){
	$("#loader").hide();
  $("#posisi_pemohon").change(function(){
		$("#loader").fadeIn(500);
		
		if($("#posisi_pemohon").val()=='1'){
			 $("#kecamatan_pemohon_form").val('');
			 $("#kecamatan_pemohon_form").fadeIn(500);
			  $("#form_radiustb_pemohon").val('');
			  $("#form_radiustb_pemohon").hide();
		 }else if($("#posisi_pemohon").val()=='2'){
			  $("#form_radiustb_pemohon").val('');
			  $("#form_radiustb_pemohon").fadeIn(500);
			  $("#kecamatan_pemohon_form").val('');
			  $("#kecamatan_pemohon_form").hide();
			  $("#kelurahan_pemohon_form").val('');
			  $("#kelurahan_pemohon_form").hide();
		 }else{
			 $("#kecamatan_pemohon_form").val('');
			 $("#kecamatan_pemohon_form").hide();
			 $("#form_radiustb_pemohon").val('');
			 $("#form_radiustb_pemohon").hide();
		 }
		$("#loader").fadeOut(500);
  });
});

$(document).ready(function(){
	$("#loader2").hide();
	$("#kelurahan_pemohon_form").hide();
  $("#kecamatan_pemohon").change(function(){
		$("#loader2").fadeIn(500);
		$("#kelurahan_pemohon_form").fadeIn(500);	
		$("#kelurahan_pemohon").fadeOut(500);
    var kecamatan = $("#kecamatan_pemohon").val();
    $.ajax({
        url: "<?php echo Yii::app()->baseUrl.'/index.php/site/kelurahan';?>",
        data: "kecamatan=" + kecamatan,
        success: function(data){
			
            // jika data sukses diambil dari server, tampilkan di <select id=kota>
            $("#kelurahan_pemohon").html(data);
		        $("#loader2").fadeOut(500);
		        $("#kelurahan_pemohon").fadeIn(1000);
        }
    });
  });
});

$(document).ready(function(){
	$("#loader3").hide();
  $("#posisi_termohon").change(function(){
		$("#loader3").fadeIn(500);
		
		if($("#posisi_termohon").val()=='1'){
			 $("#kecamatan_termohon_form").val('');
			 $("#kecamatan_termohon_form").fadeIn(500);
			 $("#form_radiustb_termohon").val('');
			 $("#form_radiustb_termohon").hide();
		 }else if($("#posisi_termohon").val()=='2'){
			 $("#kecamatan_termohon_form").val('');
			 $("#kecamatan_termohon_form").hide();
			 $("#form_radiustb_termohon").val('');
			 $("#form_radiustb_termohon").fadeIn(500);
			 $("#kelurahan_termohon_form").val('');
			 $("#kelurahan_termohon_form").hide();
		 }else{
			 $("#kecamatan_termohon_form").val('');
			 $("#kecamatan_termohon_form").hide();
			  $("#form_radiustb_termohon").val('');
			  $("#form_radiustb_termohon").hide();
		 }
		$("#loader3").fadeOut(500);
  });
});

$(document).ready(function(){
	$("#loader4").hide();
	$("#kelurahan_termohon_form").hide();
  $("#kecamatan_termohon").change(function(){
		$("#loader4").fadeIn(500);
		$("#kelurahan_termohon_form").fadeIn(500);	
		$("#kelurahan_termohon").fadeOut(500);
    var kecamatan = $("#kecamatan_termohon").val();
    $.ajax({
        url: "<?php echo Yii::app()->baseUrl.'/index.php/site/kelurahan';?>",
        data: "kecamatan=" + kecamatan,
        success: function(data){
			
            // jika data sukses diambil dari server, tampilkan di <select id=kota>
            $("#kelurahan_termohon").html(data);
		        $("#loader4").fadeOut(500);
		        $("#kelurahan_termohon").fadeIn(1000);
        }
    });
  });
});

$('#submitBtn').click(function() {
      var a;
	  var jum;
	  var  kec_pemohon=$('#kecamatan_pemohon').val();
	  var  kel_pemohon=$('#kelurahan_pemohon').val();
	  var  kec_termohon=$('#kecamatan_termohon').val();
	  var  kel_termohon=$('#kelurahan_termohon').val();
	  var  radiustb_pemohon=$('#radiustb_pemohon').val();
	  var  radiustb_termohon=$('#radiustb_termohon').val();
	  var  posisi_pemohon=$('#posisi_pemohon').val();
	  var  posisi_termohon=$('#posisi_termohon').val();
	  $("#warning").hide();
	  
					
	
	  $.ajax({
                url: "<?php echo Yii::app()->createUrl('site/hitungPanjarTalak');?>" + "/kec_pemohon/"+kec_pemohon+"/kel_pemohon/"+kel_pemohon+"/kec_termohon/"+kec_termohon+"/kel_termohon/"+kel_termohon+"/radiustb_pemohon/"+radiustb_pemohon+"/radiustb_termohon/"+radiustb_termohon+"/posisi_pemohon/"+posisi_pemohon+"/posisi_termohon/"+posisi_termohon,
                type: "GET",
                dataType: "html",
                success: function(data){
					if( posisi_pemohon=="1" && kel_pemohon!=""){
					
					$("#warning").hide();
					
					}else if( posisi_pemohon=="2" && radiustb_pemohon!=""){
											
						$("#warning").hide();
										
					}else	if( posisi_termohon=="1" &&kel_termohon!=""){
					
					$("#warning").hide();
					
					}else if( posisi_termohon=="2" && radiustb_termohon!=""){
											
						$("#warning").hide();
										
					}else if(posisi_pemohon=="" ){
						
						$("#warning").show();
					}else{
						
						$("#warning").show();
					}
				a=data.split('|');
                    $('#lokasipemohon').html(a[0]);
                    $('#besarpemohon').html(a[1]);
                    $('#jumlahpemohon').html(a[2]);
                    $('#lokasitermohon').html(a[3]);
                    $('#besartermohon').html(a[4]);
                    $('#jumlahtermohon').html(a[5]);
                    $('#jumlahtotal').html(a[6]);
					
				
                }
            });
});
</script>


<script type="text/javascript">
/* script cerai gugat*/
$(document).ready(function(){
	$("#loader5").hide();
  $("#posisi_penggugat").change(function(){
		$("#loader5").fadeIn(500);
		
		if($("#posisi_penggugat").val()=='1'){
			 $("#kecamatan_penggugat_form").val('');
			 $("#kecamatan_penggugat_form").fadeIn(500);
			  $("#form_radiustb_penggugat").val('');
			  $("#form_radiustb_penggugat").hide();
		 }else if($("#posisi_penggugat").val()=='2'){
			  $("#form_radiustb_penggugat").val('');
			  $("#form_radiustb_penggugat").fadeIn(500);
			  $("#kecamatan_penggugat_form").val('');
			  $("#kecamatan_penggugat_form").hide();
			  $("#kelurahan_penggugat_form").val('');
			  $("#kelurahan_penggugat_form").hide();
		 }else{
			 $("#kecamatan_penggugat_form").val('');
			 $("#kecamatan_penggugat_form").hide();
			 $("#form_radiustb_penggugat").val('');
			 $("#form_radiustb_penggugat").hide();
		 }
		$("#loader5").fadeOut(500);
  });
});

$(document).ready(function(){
	$("#loader6").hide();
	$("#kelurahan_penggugat_form").hide();
  $("#kecamatan_penggugat").change(function(){
		$("#loader6").fadeIn(500);
		$("#kelurahan_penggugat_form").fadeIn(500);	
		$("#kelurahan_penggugat").fadeOut(500);
    var kecamatan = $("#kecamatan_penggugat").val();
    $.ajax({
        url: "<?php echo Yii::app()->baseUrl.'/index.php/site/kelurahan';?>",
        data: "kecamatan=" + kecamatan,
        success: function(data){
			
            // jika data sukses diambil dari server, tampilkan di <select id=kota>
            $("#kelurahan_penggugat").html(data);
		        $("#loader6").fadeOut(500);
		        $("#kelurahan_penggugat").fadeIn(1000);
        }
    });
  });
});

$(document).ready(function(){
	$("#loader7").hide();
  $("#posisi_tergugat").change(function(){
		$("#loader7").fadeIn(500);
		
		if($("#posisi_tergugat").val()=='1'){
			 $("#kecamatan_tergugat_form").val('');
			 $("#kecamatan_tergugat_form").fadeIn(500);
			 $("#form_radiustb_tergugat").val('');
			 $("#form_radiustb_tergugat").hide();
		 }else if($("#posisi_tergugat").val()=='2'){
			 $("#kecamatan_tergugat_form").val('');
			 $("#kecamatan_tergugat_form").hide();
			 $("#form_radiustb_tergugat").val('');
			 $("#form_radiustb_tergugat").fadeIn(500);
			 $("#kelurahan_tergugat_form").val('');
			 $("#kelurahan_tergugat_form").hide();
		 }else{
			 $("#kecamatan_tergugat_form").val('');
			 $("#kecamatan_tergugat_form").hide();
			  $("#form_radiustb_tergugat").val('');
			  $("#form_radiustb_tergugat").hide();
		 }
		$("#loader7").fadeOut(500);
  });
});

$(document).ready(function(){
	$("#loader8").hide();
	$("#kelurahan_tergugat_form").hide();
  $("#kecamatan_tergugat").change(function(){
		$("#loader8").fadeIn(500);
		$("#kelurahan_tergugat_form").fadeIn(500);	
		$("#kelurahan_tergugat").fadeOut(500);
    var kecamatan = $("#kecamatan_tergugat").val();
    $.ajax({
        url: "<?php echo Yii::app()->baseUrl.'/index.php/site/kelurahan';?>",
        data: "kecamatan=" + kecamatan,
        success: function(data){
			
            // jika data sukses diambil dari server, tampilkan di <select id=kota>
            $("#kelurahan_tergugat").html(data);
		        $("#loader8").fadeOut(500);
		        $("#kelurahan_tergugat").fadeIn(1000);
        }
    });
  });
});

$('#submitBtn2').click(function() {
      var a;
	  var jum;
	  var  kec_penggugat=$('#kecamatan_penggugat').val();
	  var  kel_penggugat=$('#kelurahan_penggugat').val();
	  var  kec_tergugat=$('#kecamatan_tergugat').val();
	  var  kel_tergugat=$('#kelurahan_tergugat').val();
	  var  radiustb_penggugat=$('#radiustb_penggugat').val();
	  var  radiustb_tergugat=$('#radiustb_tergugat').val();
	  var  posisi_penggugat=$('#posisi_penggugat').val();
	  var  posisi_tergugat=$('#posisi_tergugat').val();
	  $("#warning").hide();
	  
	
	  $.ajax({
                url: "<?php echo Yii::app()->createUrl('site/hitungPanjarGugat');?>" + "/kec_penggugat/"+kec_penggugat+"/kel_penggugat/"+kel_penggugat+"/kec_tergugat/"+kec_tergugat+"/kel_tergugat/"+kel_tergugat+"/radiustb_penggugat/"+radiustb_penggugat+"/radiustb_tergugat/"+radiustb_tergugat+"/posisi_penggugat/"+posisi_penggugat+"/posisi_tergugat/"+posisi_tergugat,
                type: "GET",
                dataType: "html",
                success: function(data){
									if( posisi_penggugat=="1" && kel_penggugat!=""){
					
					$("#warning2").hide();
					
					}else if( posisi_penggugat=="2" && radiustb_penggugat!=""){
											
						$("#warning2").hide();
										
					}else	if( posisi_tergugat=="1" &&kel_tergugat!=""){
					
					$("#warning2").hide();
					
					}else if( posisi_tergugat=="2" && radiustb_tergugat!=""){
											
						$("#warning2").hide();
										
					}else if(posisi_penggugat=="" ){
						
						$("#warning2").show();
					}else{
						
						$("#warning2").show();
					}
				a=data.split('|');
                    $('#lokasipenggugat').html(a[0]);
                    $('#besarpenggugat').html(a[1]);
                    $('#jumlahpenggugat').html(a[2]);
                    $('#lokasitergugat').html(a[3]);
                    $('#besartergugat').html(a[4]);
                    $('#jumlahtergugat').html(a[5]);
                    $('#jumlahtotal2').html(a[6]);
					
				
                }
            });
});
</script>