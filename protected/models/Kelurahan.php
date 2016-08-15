<?php

/**
 * This is the model class for table "kelurahan".
 *
 * The followings are the available columns in table 'kelurahan':
 * @property integer $id_kel
 * @property integer $id_kec
 * @property string $nama_kel
 * @property integer $id_radius
 */
class Kelurahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kelurahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kec, nama_kel, id_radius', 'required'),
			array('id_kec, id_radius', 'numerical', 'integerOnly'=>true),
			array('nama_kel', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kel, id_kec, nama_kel, id_radius', 'safe', 'on'=>'search'),
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
			'idKec' => array(self::BELONGS_TO, 'Kecamatan', 'id_kec'),
			'idRadius' => array(self::BELONGS_TO, 'Radius', 'id_radius'),
		);
	}
	
	public function getKecamatan()
	{
		return CHtml::listData(Kecamatan::model()->findAll(),'id_kec','nama_kec');
	}
	
	public function getRadius()
	{
		return CHtml::listData(Radius::model()->findAll(),'id_radius','kategori_radius');
	}
	
	public function getRadius2()
	{
		$model=Radius::model()->findAll();
		foreach($model as $a){
		$data[$a->id_radius]=$a->kategori_radius.' - Rp.'.number_format($a->nilai_radius,0,",",".");			
		}
		return $data;
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kel' => 'Id Kel',
			'id_kec' => 'Nama Kecamatan',
			'nama_kel' => 'Nama Kelurahan',
			'id_radius' => 'Kategori Radius',
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

		$criteria->compare('id_kel',$this->id_kel);
		$criteria->compare('id_kec',$this->id_kec);
		$criteria->compare('nama_kel',$this->nama_kel,true);
		$criteria->compare('id_radius',$this->id_radius);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                        'defaultOrder'=>'id_kel,id_kec DESC',
                    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelurahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
