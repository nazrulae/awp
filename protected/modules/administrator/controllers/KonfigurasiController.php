<?php

class KonfigurasiController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
		$username=Yii::app()->user->name;
		$user=Admin::model()->findByAttributes(array('username'=>$username));
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view'),
'users'=>array($user->username),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('update'),
'users'=>array($user->username),
),

array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/


/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Konfigurasi']))
{
$nama_file=$model->nilai_konfigurasi;
$model->attributes=$_POST['Konfigurasi'];

if($model->type_konfigurasi=='File'){
	
		$cekfile=CUploadedFile::getInstance($model,'nilai_konfigurasi');

		
			
			
		
			unlink(Yii::app()->basePath.'/../themes/front/images/'.$nama_file);
			$model->nilai_konfigurasi=$nama_file;
			
			
			$cekfile->saveAs(Yii::app()->basePath.'/../themes/front/images/'.$model->nilai_konfigurasi);
		
				
			
		
}elseif($model->type_konfigurasi=='Uang'){
	$model->nilai_konfigurasi=str_replace('.','',$model->nilai_konfigurasi);
	}
if($model->save())
	Yii::app()->user->setFlash('berhasil', "Data Telah Berhasil Diperbarui");
$this->redirect(array('view','id'=>$model->id_konfigurasi));
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/


/**
* Lists all models.
*/

/**
* Manages all models.
*/
public function actionIndex()
{
$model=new Konfigurasi('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Konfigurasi']))
$model->attributes=$_GET['Konfigurasi'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Konfigurasi::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='konfigurasi-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
