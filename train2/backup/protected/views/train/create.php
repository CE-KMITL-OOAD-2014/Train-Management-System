<?php
/* @var $this TrainController */
/* @var $model Train */

$this->breadcrumbs=array(
	'Trains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Train', 'url'=>array('index')),
	array('label'=>'Manage Train', 'url'=>array('admin')),
);
?>

<h1>Create Train</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>