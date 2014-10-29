<?php

$this->breadcrumbs=array(
	'เเจ้งสถานะรถไฟ'=>array('status/create'),
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>เเจ้งสถานะรถไฟ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>