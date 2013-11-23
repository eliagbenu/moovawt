<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $user_id
 * @property string $user_username
 * @property string $user_fullname
 * @property string $user_email
 * @property string $user_pass
 * @property integer $user_active
 * @property string $user_reg_date
 * @property string $user_last_visit
 * @property integer $user_role
 *
 * The followings are the available model relations:
 * @property Joints[] $joints
 * @property ListEvent[] $listEvents
 * @property PromoEvent[] $promoEvents
 * @property PromoJoints[] $promoJoints
 * @property Role $userRole
 */
class User extends CActiveRecord
{

 public $user_username;
 public $user_fullname;
public $user_email;
public $user_pass;
public $user_active;
public $user_reg_date;
public $user_last_visit;
public $user_role;
	
	public $user_pass_confirm;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_username, user_email, user_pass, user_reg_date, user_last_visit, user_role,
			       user_pass_confirm,user_role', 'required'),
			    
			array('user_active, user_role', 'numerical', 'integerOnly'=>true),
			array('user_username', 'length', 'max'=>20),
			array('user_fullname', 'length', 'max'=>50),
			array('user_email, user_pass', 'length', 'max'=>100),
			array('user_email','email'),
			array('user_email','unique'),			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_username, user_fullname, user_email, user_pass, user_active, user_reg_date, user_last_visit, user_role', 'safe', 'on'=>'search'),
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
			'joints' => array(self::HAS_MANY, 'Joints', 'joint_creator'),
			'listEvents' => array(self::HAS_MANY, 'ListEvent', 'event_creator'),
			'promoEvents' => array(self::HAS_MANY, 'PromoEvent', 'user_id'),
			'promoJoints' => array(self::HAS_MANY, 'PromoJoints', 'user_id'),
			'userRole' => array(self::BELONGS_TO, 'Role', 'user_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_username' => 'User Username',
			'user_fullname' => 'User Fullname',
			'user_email' => 'Email',
			'user_pass' => 'Password',
			'user_pass_confirm' => 'Confirm Password',			
			'user_active' => 'User Active',
			'user_reg_date' => 'User Reg Date',
			'user_last_visit' => 'User Last Visit',
			'user_role' => 'User Role',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_username',$this->user_username,true);
		$criteria->compare('user_fullname',$this->user_fullname,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_pass',$this->user_pass,true);
		$criteria->compare('user_active',$this->user_active);
		$criteria->compare('user_reg_date',$this->user_reg_date,true);
		$criteria->compare('user_last_visit',$this->user_last_visit,true);
		$criteria->compare('user_role',$this->user_role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}