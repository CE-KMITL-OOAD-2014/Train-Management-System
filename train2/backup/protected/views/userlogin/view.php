<?php
/* @var $this UserloginController */
/* @var $model Userlogin */

$this->breadcrumbs=array(
	'Userlogins'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Userlogin', 'url'=>array('index')),
	array('label'=>'Create Userlogin', 'url'=>array('create')),
	array('label'=>'Update Userlogin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Userlogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userlogin', 'url'=>array('admin')),
);
?>

<h1>View Userlogin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'brith_date',
		'username',
		'password',
		'email',
	),
)); ?>
