<?php

/**
 * This is the model class for table "{{joints}}".
 *
 * The followings are the available columns in table '{{joints}}':
 * @property integer $joint_id
 * @property string $joint_name
 * @property string $joint_keywords
 * @property string $joint_location
 * @property string $joint_info
 * @property integer $joint_creator
 * @property integer $list_id
 * @property string $joint_created
 * @property string $joint_logo
 * @property string $joint_lati
 * @property string $joint_long
 * @property string $joint_images
 * @property string $joint_operations
 * @property integer $cat_id
 *
 * The followings are the available model relations:
 * @property CatJoint $cat
 * @property Listing $list
 * @property User $jointCreator
 * @property PromoJoints[] $promoJoints
 */
class Joints extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Joints the static model class
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
		return '{{joints}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('joint_name, joint_location, joint_info, joint_creator, list_id, joint_created, joint_operations, cat_id', 'required'),
			array('joint_logo','safe'),
			array('joint_creator, list_id, cat_id,joint_lati,joint_long', 'numerical', 'integerOnly'=>false),
			array('joint_name', 'length', 'max'=>50),
			array('joint_keywords, joint_logo, joint_lati, joint_long, joint_images, joint_operations', 'length', 'max'=>255),
			array('joint_location', 'length', 'max'=>100),
			
    		array('joint_logo', 'file', 'types'=>'jpg, gif, png'),
            
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('joint_id, joint_name, joint_keywords, joint_location, joint_info, joint_creator, list_id, joint_created, joint_logo, joint_lati, joint_long, joint_images, joint_operations, cat_id', 'safe', 'on'=>'search'),
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
			'cat' => array(self::BELONGS_TO, 'CatJoint', 'cat_id'),
			'list' => array(self::BELONGS_TO, 'Listing', 'list_id'),
			'jointCreator' => array(self::BELONGS_TO, 'User', 'joint_creator'),
			'promoJoints' => array(self::HAS_MANY, 'PromoJoints', 'joint_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'joint_id' => 'Joint',
			'joint_name' => 'Joint Name',
			'joint_keywords' => 'Joint Keywords',
			'joint_location' => 'Joint Location',
			'joint_info' => 'Joint Info',
			'joint_creator' => 'Joint Creator',
			'list_id' => 'List',
			'joint_created' => 'Joint Created',
			'joint_logo' => 'Joint Logo',
			'joint_lati' => 'Joint Lati',
			'joint_long' => 'Joint Long',
			'joint_images' => 'Joint Images',
			'joint_operations' => 'Joint Operations',
			'cat_id' => 'Cat',
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

		$criteria->compare('joint_id',$this->joint_id);
		$criteria->compare('joint_name',$this->joint_name,true);
		$criteria->compare('joint_keywords',$this->joint_keywords,true);
		$criteria->compare('joint_location',$this->joint_location,true);
		$criteria->compare('joint_info',$this->joint_info,true);
		$criteria->compare('joint_creator',$this->joint_creator);
		$criteria->compare('list_id',$this->list_id);
		$criteria->compare('joint_created',$this->joint_created,true);
		$criteria->compare('joint_logo',$this->joint_logo,true);
		$criteria->compare('joint_lati',$this->joint_lati,true);
		$criteria->compare('joint_long',$this->joint_long,true);
		$criteria->compare('joint_images',$this->joint_images,true);
		$criteria->compare('joint_operations',$this->joint_operations,true);
		$criteria->compare('cat_id',$this->cat_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}