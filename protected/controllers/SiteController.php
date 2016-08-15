<?php

class SiteController extends Controller
{
	public $layout='//layouts/column2';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}



	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->redirect(array('site/login'));
		$model=new Radius;
		$this->layout='//layouts/column2';
		$this->render('index',array(
'model'=>$model,
));
	}

	public function actionKelurahan()
	{
		$model=Kelurahan::model()->findAllByAttributes(array('id_kec'=>$_GET['kecamatan']));
		?>
		<option value="">--Pilih Kelurahan/Desa--</option>
		<?php
		foreach($model as $data){
					?>
					<option value="<?php echo $data->id_kel;?>"><?php echo $data->nama_kel;?></option>
					<?php
					}
		
	}
	
	public function actionHitungPanjarTalak()
	{
		$data=Konfigurasi::model()->findAllByAttributes(array('type_konfigurasi'=>'Uang'));
		$biaya_daftar=0;
		$judul=Konfigurasi::model()->findByPk('6'); 
		$tempat=$judul->nilai_konfigurasi;
		foreach($data as $a){
			$biaya_daftar=$biaya_daftar+intval($a->nilai_konfigurasi);
		}
		
		//$biaya_daftar=91000;
		if($_GET['posisi_pemohon']=="1"){
		$kel_pemohon=Kelurahan::model()->findByPk($_GET['kel_pemohon']);
		$lokasi_pemohon=$kel_pemohon->nama_kel;
		$besar_pemohon=$kel_pemohon->idRadius->nilai_radius;
		$total_pemohon=$kel_pemohon->idRadius->nilai_radius*3;
		}else{
		$_GET['radiustb_pemohon']=str_replace('.','',$_GET['radiustb_pemohon']);
		$lokasi_pemohon='Luar '.$tempat;
		!empty($_GET['radiustb_pemohon']) ? $_GET['radiustb_pemohon']=$_GET['radiustb_pemohon'] : $_GET['radiustb_pemohon']=0;  
		$besar_pemohon=$_GET['radiustb_pemohon'];
		$total_pemohon=$_GET['radiustb_pemohon']*3;
		}
		if($_GET['posisi_termohon']=="1"){
		$kel_termohon=Kelurahan::model()->findByPk($_GET['kel_termohon']);
		$lokasi_termohon=$kel_termohon->nama_kel;
		$besar_termohon=$kel_termohon->idRadius->nilai_radius;
		$total_termohon=$kel_termohon->idRadius->nilai_radius*3;
		}else{
		$_GET['radiustb_termohon']=str_replace('.','',$_GET['radiustb_termohon']);
		$lokasi_termohon='Luar '.$tempat;
		!empty($_GET['radiustb_termohon']) ? $_GET['radiustb_termohon']=$_GET['radiustb_termohon'] : $_GET['radiustb_termohon']=0; 
		$besar_termohon=$_GET['radiustb_termohon'];
		$total_termohon=$_GET['radiustb_termohon']*3;	
		}
		
		
		$total=$biaya_daftar+$total_pemohon+$total_termohon;
	echo $lokasi_pemohon.'|Rp.'.number_format($besar_pemohon,0,",",".").'|'.number_format($total_pemohon,0,",",".").'|'.$lokasi_termohon.'|Rp.'.number_format($besar_termohon,0,",",".").'|'.number_format($total_termohon,0,",",".").'|<b>'.number_format($total,0,",",".").'</b>';
	}
	
	public function actionHitungPanjarGugat()
	{
				$data=Konfigurasi::model()->findAllByAttributes(array('type_konfigurasi'=>'Uang'));
		$biaya_daftar=0;
		$judul=Konfigurasi::model()->findByPk('6'); 
		$tempat=$judul->nilai_konfigurasi;
		foreach($data as $a){
			$biaya_daftar=$biaya_daftar+intval($a->nilai_konfigurasi);
		}
		if($_GET['posisi_penggugat']=="1"){
		$kel_penggugat=Kelurahan::model()->findByPk($_GET['kel_penggugat']);
		$lokasi_penggugat=$kel_penggugat->nama_kel;
		$besar_penggugat=$kel_penggugat->idRadius->nilai_radius;
		$total_penggugat=$kel_penggugat->idRadius->nilai_radius*3;
		}else{
		$_GET['radiustb_penggugat']=str_replace('.','',$_GET['radiustb_penggugat']);
		$lokasi_penggugat='Luar '.$tempat;
		!empty($_GET['radiustb_penggugat']) ? $_GET['radiustb_penggugat']=$_GET['radiustb_penggugat'] : $_GET['radiustb_penggugat']=0; 
		$besar_penggugat=$_GET['radiustb_penggugat'];
		$total_penggugat=$_GET['radiustb_penggugat']*3;
		}
		if($_GET['posisi_tergugat']=="1"){
		$kel_tergugat=Kelurahan::model()->findByPk($_GET['kel_tergugat']);
		$lokasi_tergugat=$kel_tergugat->nama_kel;
		$besar_tergugat=$kel_tergugat->idRadius->nilai_radius;
		$total_tergugat=$kel_tergugat->idRadius->nilai_radius*3;
		}else{
		$_GET['radiustb_tergugat']=str_replace('.','',$_GET['radiustb_tergugat']);
		$lokasi_tergugat='Luar '.$tempat;
		!empty($_GET['radiustb_tergugat']) ? $_GET['radiustb_tergugat']=$_GET['radiustb_tergugat'] : $_GET['radiustb_tergugat']=0; 
		$besar_tergugat=$_GET['radiustb_tergugat'];
		$total_tergugat=$_GET['radiustb_tergugat']*3;	
		}
		
		
		$total=$biaya_daftar+$total_penggugat+$total_tergugat;
	echo $lokasi_penggugat.'|Rp.'.number_format($besar_penggugat,0,",",".").'|'.number_format($total_penggugat,0,",",".").'|'.$lokasi_tergugat.'|Rp.'.number_format($besar_tergugat,0,",",".").'|'.number_format($total_tergugat,0,",",".").'|<b>'.number_format($total,0,",",".").'</b>';
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
}