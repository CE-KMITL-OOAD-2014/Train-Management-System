<?php

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
if($_GET['yt0']=="Search"){
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
}
?>



