<?php

/**
 * This is the model class for table "radius".
 *
 * The followings are the available columns in table 'radius':
 * @property integer $id_radius
 * @property string $kategori_radius
 * @property double $nilai_radius
 */
class Radius extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'radius';
	}
	
	public $biaya_pendaftaran;
	public $redaksi;
	public $biaya_proses;
   
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kategori_radius, nilai_radius', 'required'),
			array('nilai_radius', 'numerical'),
			array('kategori_radius', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_radius, kategori_radius, nilai_radius', 'safe', 'on'=>'search'),
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
		'radius' => array(self::HAS_MANY, 'Radius', 'id_radius'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_radius' => 'Id Radius',
			'kategori_radius' => 'Kategori Radius',
			'nilai_radius' => 'Nilai Radius',
			'biaya_pendaftaran' => 'Biaya Pendaftaran',
			'biaya_proses' => 'Biaya Proses',
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

		$criteria->compare('id_radius',$this->id_radius);
		$criteria->compare('kategori_radius',$this->kategori_radius,true);
		$criteria->compare('nilai_radius',$this->nilai_radius);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Radius the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
