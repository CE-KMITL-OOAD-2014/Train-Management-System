<?php

class TrainController extends Controller
{
	public $layout='//layouts/column2';



	
	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('admin','index','view'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('admin','index','view','create','update','delete'),
				'users'=>array('@'),
			),
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}


	public function actionAdmin()
	{    
		$model=new Train('search');
		$model->unsetAttributes();  
		if(isset($_GET['Train']))
			$model->attributes=$_GET['Train'];
		$this->render('admin',array(
			'model'=>$model
			
		));
	
		


	}
	public function loadModel($id)
	{
		$model=Train::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='train-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
