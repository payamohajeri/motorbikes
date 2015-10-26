<?php
/* @var $this MotorbikeController */
/* @var $model Motorbike */

$this->breadcrumbs=array(
	'Motorbikes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Motorbike', 'url'=>array('index')),
	array('label'=>'Create Motorbike', 'url'=>array('create')),
	array('label'=>'View Motorbike', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Motorbike', 'url'=>array('admin')),
);
?>

<h1>Update Motorbike <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>