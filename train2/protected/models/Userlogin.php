<?php


class Userlogin extends CActiveRecord
{
	
	public $verifyCode;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function tableName()
	{
		return 'userlogin';
	}
	public function rules()
	{
		return array(
			array('name, brith_date, username, password, email', 'required'),
			array('user_type_id, count_visit', 'numerical', 'integerOnly'=>true),
			array('name, username, password, email', 'length', 'max'=>40),
			array('brith_date', 'length', 'max'=>20),
			array('id, name, brith_date, username, password, email', 'safe', 'on'=>'search'),
		);
	}
	public function relations()
	{
		return array(
		);
	}
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'brith_date' => 'Brith Date',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('brith_date',$this->brith_date,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function validatePassword($password){
	return $this->password === $password;
	}
}