<?php
/* @var $this UserloginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userlogins',
);

$this->menu=array(
	array('label'=>'Create Userlogin', 'url'=>array('create')),
	array('label'=>'Manage Userlogin', 'url'=>array('admin')),
);
?>

<h1>Userlogins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
