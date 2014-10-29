<?php
/* @var $this UserloginController */
/* @var $model Userlogin */

$this->breadcrumbs=array(
	'Userlogins'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userlogin', 'url'=>array('index')),
	array('label'=>'Create Userlogin', 'url'=>array('create')),
	array('label'=>'View Userlogin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Userlogin', 'url'=>array('admin')),
);
?>

<h1>Update Userlogin <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>