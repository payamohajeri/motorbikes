<?php
/* @var $this MotorbikeController */
/* @var $model Motorbike */

$this->breadcrumbs=array(
	'Motorbikes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Motorbike', 'url'=>array('index')),
	array('label'=>'Manage Motorbike', 'url'=>array('admin')),
);
?>

<h1>Create Motorbike</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>