<?php
/* @var $this MotorbikeController */
/* @var $model Motorbike */

$this->breadcrumbs=array(
	'Motorbikes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Motorbike', 'url'=>array('index')),
	array('label'=>'Create Motorbike', 'url'=>array('create')),
	array('label'=>'Update Motorbike', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Motorbike', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Motorbike', 'url'=>array('admin')),
);
?>

<h1>View Motorbike #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created',
		'make',
		'model',
		'cc',
		'color',
		'weight',
		'price',
		'image',
		'comment',
	),
)); ?>
