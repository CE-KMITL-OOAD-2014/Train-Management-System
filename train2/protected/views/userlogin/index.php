<?php
/* @var $this UserloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User',
);

$this->menu=array(
	array('label'=>'Create ', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>User</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
