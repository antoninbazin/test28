<?php

/**
 * This is the model class for table "guest".
 *
 * The followings are the available columns in table 'guest':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mail
 * @property string $gender
 * @property integer $age
 * @property string $arrival_date
 * @property string $stuff
 * @property string $phone
 * @property string $name_party
 */
class Guest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Guest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'guest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, mail, gender, age, arrival_date, stuff, phone', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, mail, name_party', 'length', 'max'=>200),
			array('gender, stuff', 'length', 'max'=>6),
			array('phone', 'length', 'max'=>14),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mail, gender, age, arrival_date, stuff, phone, name_party', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'mail' => 'Mail',
			'gender' => 'Gender',
			'age' => 'Age',
			'arrival_date' => 'Arrival Date',
			'stuff' => 'Stuff',
			'phone' => 'Phone',
			'name_party' => 'Name Party',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('arrival_date',$this->arrival_date,true);
		$criteria->compare('stuff',$this->stuff,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('name_party',$this->name_party,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}