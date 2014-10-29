<?php


class Status extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'status';
	}

	public function rules()
	{
		
		return array(
			array('status, date, time', 'required'),
			array('id, status, date, time', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'date' => 'Date',
			'time' => 'Time',
		);
	}

	
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}