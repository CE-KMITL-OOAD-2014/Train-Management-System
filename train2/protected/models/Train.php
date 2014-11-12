<?php

class Train extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'line';
	}


	public function rules()
	{
		return array(
			array('number, type, source, dest, time, cost', 'required'),
			array('number', 'length', 'max'=>20),
			array('type, source, dest, time, cost', 'length', 'max'=>40),
			array('id, number, type, source, dest, time, cost', 'safe', 'on'=>'search'),
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
			'number' => 'Number',
			'type' => 'Type',
			'source' => 'Source',
			'dest' => 'Dest',
			'time' => 'Time',
			'cost' => 'Cost',
		);
	}

	
	public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('dest',$this->dest,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('cost',$this->cost,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}