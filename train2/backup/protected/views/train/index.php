<?php
/* @var $this TrainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trains',
);

$this->menu=array(
	array('label'=>'Create Train', 'url'=>array('create')),
	array('label'=>'Manage Train', 'url'=>array('admin')),
);
?>

<h1>Trains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
