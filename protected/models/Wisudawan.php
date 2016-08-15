<?php

/**
 * This is the model class for table "wisudawan".
 *
 * The followings are the available columns in table 'wisudawan':
 * @property integer $id_calon_wisuda
 * @property string $id_mahasiswa
 * @property string $username
 * @property string $password
 * @property string $verifikasi
 * @property string $status_pembayaran
 * @property string $waktu_bayar
 * @property string $no_skl
 * @property string $no_bebas_fak
 * @property string $no_bebas_univ
 */
class Wisudawan extends CActiveRecord
{
	public $nim, $nama, $angkatan,$alamat,$jurusan,$status_alumni, $jenjang_studi,$fakultas,$hasil;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wisudawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id_mahasiswa, username,nim,angkatan,alamat,jurusan,jenjang_studi,nama,fakultas, password, verifikasi, status_pembayaran, no_skl, no_bebas_fak, no_bebas_univ', 'required'),
			array('id_mahasiswa, username, password', 'length', 'max'=>30),
			array('verifikasi, status_pembayaran', 'length', 'max'=>1),
			array('no_skl, no_bebas_fak, no_bebas_univ', 'length', 'max'=>100),
			array('file_skl, file_bebas_fak, file_bebas_univ', 'length', 'max'=>200),
			array('waktu_bayar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_calon_wisuda, id_mahasiswa, username, password, verifikasi, status_pembayaran, waktu_bayar, no_skl, no_bebas_fak, no_bebas_univ', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_calon_wisuda' => 'Id Calon Wisuda',
			'id_mahasiswa' => 'Id Mahasiswa',
			'username' => 'Username',
			'password' => 'Password',
			'verifikasi' => 'Verifikasi',
			'status_pembayaran' => 'Status Pembayaran',
			'waktu_bayar' => 'Waktu Bayar',
			'no_skl' => 'No Skl',
			'no_bebas_fak' => 'No Bebas Fak',
			'no_bebas_univ' => 'No Bebas Univ',
			'file_skl' => 'Scan SKL',
			'file_bebas_fak' => 'Scan Surat Bebas Pustaka Fakultas',
			'file_bebas_univ' => 'Scan Surat Bebas Pustaka Universitas',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	 
	public function getDataMhs($id){
		 // Resources
                $url = 'http://simak-uinsuska.pe.hu/mahasiswa/servicesearchMhsById/id/'.$id;
 
                // Mengambil Data String dari Resources
                $client = curl_init($url);
                curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($client);
                curl_close($client);
 
                $xml = simplexml_load_string($response);
				return $xml;
	} 
	 
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_calon_wisuda',$this->id_calon_wisuda);
		$criteria->compare('id_mahasiswa',$this->id_mahasiswa,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('verifikasi',$this->verifikasi,true);
		$criteria->compare('status_pembayaran',$this->status_pembayaran,true);
		$criteria->compare('waktu_bayar',$this->waktu_bayar,true);
		$criteria->compare('no_skl',$this->no_skl,true);
		$criteria->compare('no_bebas_fak',$this->no_bebas_fak,true);
		$criteria->compare('no_bebas_univ',$this->no_bebas_univ,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wisudawan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
