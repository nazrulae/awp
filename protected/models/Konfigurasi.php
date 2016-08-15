<?php

/**
 * This is the model class for table "konfigurasi".
 *
 * The followings are the available columns in table 'konfigurasi':
 * @property integer $id_konfigurasi
 * @property string $nama_konfigurasi
 * @property string $type_konfigurasi
 * @property string $nilai_konfigurasi
 */
class Konfigurasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'konfigurasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_konfigurasi, type_konfigurasi, nilai_konfigurasi', 'required'),
			array('nama_konfigurasi', 'length', 'max'=>40),
			array('type_konfigurasi', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_konfigurasi, nama_konfigurasi, type_konfigurasi, nilai_konfigurasi', 'safe', 'on'=>'search'),
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
			'id_konfigurasi' => 'Id Konfigurasi',
			'nama_konfigurasi' => 'Nama Konfigurasi',
			'type_konfigurasi' => 'Type Konfigurasi',
			'nilai_konfigurasi' => 'Nilai Konfigurasi',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_konfigurasi',$this->id_konfigurasi);
		$criteria->compare('nama_konfigurasi',$this->nama_konfigurasi,true);
		$criteria->compare('type_konfigurasi',$this->type_konfigurasi,true);
		$criteria->compare('nilai_konfigurasi',$this->nilai_konfigurasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Konfigurasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
