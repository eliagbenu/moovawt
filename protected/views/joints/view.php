<?php
/* @var $this JointsController */
/* @var $model Joints */

$this->breadcrumbs=array(
	'Joints'=>array('index'),
	$model->joint_id,
);

$this->menu=array(
	array('label'=>'List Joints', 'url'=>array('index')),
	array('label'=>'Create Joints', 'url'=>array('create')),
	array('label'=>'Update Joints', 'url'=>array('update', 'id'=>$model->joint_id)),
	array('label'=>'Delete Joints', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->joint_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Joints', 'url'=>array('admin')),
);
?>

<h1>View Joints #<?php echo $model->joint_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'joint_id',
		'joint_name',
		'joint_keywords',
		'joint_location',
		'joint_info',
		'joint_creator',
		'list_id',
		'joint_created',
		'joint_logo',
		'joint_lati',
		'joint_long',
		'joint_images',
		'joint_operations',
		'cat_id',
	),
)); ?>
