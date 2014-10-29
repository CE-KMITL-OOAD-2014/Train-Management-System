<?php
/* @var $this UserloginController */
/* @var $model Userlogin */

$this->breadcrumbs=array(
	'ลงทะเบียน'=>array('userlogin/create'),
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>ลงทะเบียน</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>