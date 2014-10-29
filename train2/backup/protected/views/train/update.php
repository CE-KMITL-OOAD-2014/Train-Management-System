<?php
/* @var $this TrainController */
/* @var $model Train */

$this->breadcrumbs=array(
	'Trains'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Train', 'url'=>array('index')),
	array('label'=>'Create Train', 'url'=>array('create')),
	array('label'=>'View Train', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Train', 'url'=>array('admin')),
);
?>

<h1>Update Train <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>