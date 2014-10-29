<?php
/* @var $this UserloginController */
/* @var $model Userlogin */

$this->breadcrumbs=array(
	'Userlogins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userlogin', 'url'=>array('index')),
	array('label'=>'Manage Userlogin', 'url'=>array('admin')),
);
?>

<h1>Create Userlogin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>