<?php


$this->breadcrumbs=array(
	'เเจ้งสถานะรถไฟ',
);

$this->menu=array(
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>เเสดงการเเจ้งสถานะรถไฟ</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
