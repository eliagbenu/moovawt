<?php
/* @var $this JointsController */
/* @var $model Joints */

$this->breadcrumbs=array(
	'Joints'=>array('index'),
	$model->joint_id=>array('view','id'=>$model->joint_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Joints', 'url'=>array('index')),
	array('label'=>'Create Joints', 'url'=>array('create')),
	array('label'=>'View Joints', 'url'=>array('view', 'id'=>$model->joint_id)),
	array('label'=>'Manage Joints', 'url'=>array('admin')),
);
?>

<h1>Update Joints <?php echo $model->joint_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>