<?php
/* @var $this CatJointController */
/* @var $model CatJoint */

$this->breadcrumbs=array(
	'Cat Joints'=>array('index'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List CatJoint', 'url'=>array('index')),
	array('label'=>'Create CatJoint', 'url'=>array('create')),
	array('label'=>'Update CatJoint', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete CatJoint', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatJoint', 'url'=>array('admin')),
);
?>

<h1>View CatJoint #<?php echo $model->cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'cat_name',
	),
)); ?>
