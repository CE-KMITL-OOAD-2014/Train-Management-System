<?php
/* @var $this TrainController */
/* @var $model Train */
$this->breadcrumbs=array(
	'ค้นหาเส้นทางรถไฟ'=>array('admin'),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
");
?>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	
));?>
<?php
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'train-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'type',
		'source',
		'dest',
		'time',
		'cost',
	),
)); 
?>



