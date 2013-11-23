<?php
/* @var $this CatJointController */
/* @var $model CatJoint */

$this->breadcrumbs=array(
	'Cat Joints'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatJoint', 'url'=>array('index')),
	array('label'=>'Create CatJoint', 'url'=>array('create')),
	array('label'=>'View CatJoint', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Manage CatJoint', 'url'=>array('admin')),
);
?>

<h1>Update CatJoint <?php echo $model->cat_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>