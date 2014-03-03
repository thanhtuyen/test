<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userid
 * @property string $username
 * @property string $userpass
 * @property string $user_fullname
 * @property string $user_mobile
 * @property string $user_address
 * @property integer $user_role
 * @property string $create_date
 * @property integer $create_user
 * @property string $update_date
 * @property string $usercol
 */
class User extends CActiveRecord
{

  const ADMIN = 1;
  const USER = 0;
//  const LEADER = 3;
//  const USER = 4;
//  const STATUS_ACTIVE = 1;
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, user_fullname', 'required'),
			array('userpass', 'required', 'on' => 'create'),
			array('user_role, create_user', 'numerical', 'integerOnly'=>true),
			array('username, userpass, user_fullname, user_mobile, user_address, usercol', 'length', 'max'=>45),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userid, username, userpass, user_fullname, user_mobile, user_address, user_role, create_date, create_user, update_date, usercol', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'username' => 'Username',
			'userpass' => 'Password',
			'user_fullname' => 'Fullname',
			'user_mobile' => 'Mobile',
			'user_address' => 'Address',
			'user_role' => 'Role',
			'create_date' => 'Create Date',
			'create_user' => 'Create User',
			'update_date' => 'Update Date',
			'usercol' => 'Usercol',
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

		$criteria->compare('userid',$this->userid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('userpass',$this->userpass,true);
		$criteria->compare('user_fullname',$this->user_fullname,true);
		$criteria->compare('user_mobile',$this->user_mobile,true);
		$criteria->compare('user_address',$this->user_address,true);
		$criteria->compare('user_role',$this->user_role);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('usercol',$this->usercol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  /**
   * perform one-way encryption on the password before we store it in the database
   */
  protected function afterValidate() {
    parent::afterValidate();
    if (in_array($this->getScenario(), array('create'))) {
      $this->userpass = $this->encrypt($this->userpass);
    }

  }
  /**
   * encrypt password
   *
   * @param $value
   * @return string
   */
  public function encrypt($value) {
    return md5($value);
  }
  /**
   * get roles options
   * return List roles
   */
  public function getRoleOptions() {
    return array(
      self::ADMIN => 'admin',
      self::USER => 'user',
    );
  }
  /**
   * get role user login
   *
   * @param $id
   * @return mixed
   */
  public function getUserRole($id) {
    $role = User::model()->findByPk($id);
    $roles = $this->getRoleOptions();

    return $roles[$role->user_role];
  }

  public function getRole() {
    $id = Yii::app()->user->id;
    $user = User::model()->findByPk($id);

    return $user->user_role;
  }
}