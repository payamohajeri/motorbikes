<?php
/* @var $this MotorbikeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Motorbikes',
);

$this->menu=array(
	array('label'=>'Create Motorbike', 'url'=>array('create')),
	array('label'=>'Manage Motorbike', 'url'=>array('admin')),
);
?>

<h1>Motorbikes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'enablePagination'=>true,
)); ?>
