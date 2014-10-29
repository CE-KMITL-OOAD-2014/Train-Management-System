<?php
/* @var $this TrainController */
/* @var $model Train */

$this->breadcrumbs=array(
	'Trains'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Train', 'url'=>array('index')),
	array('label'=>'Create Train', 'url'=>array('create')),
	array('label'=>'Update Train', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Train', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Train', 'url'=>array('admin')),
);
?>

<h1>View Train #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'source',
		'dest',
	),
)); ?>
