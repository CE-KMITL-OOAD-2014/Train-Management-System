<?php


$this->breadcrumbs=array(
	'เเก้ไขสายรถไฟ',
);

$this->menu=array(
	array('label'=>'Create Line', 'url'=>array('create')),
	array('label'=>'Manage Line', 'url'=>array('admin')),
);
?>

<h1>เเสดงสายรถไฟ</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
