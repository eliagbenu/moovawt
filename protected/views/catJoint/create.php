<?php
/* @var $this CatJointController */
/* @var $model CatJoint */

$this->breadcrumbs=array(
	'Cat Joints'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatJoint', 'url'=>array('index')),
	array('label'=>'Manage CatJoint', 'url'=>array('admin')),
);
?>

<h1>Create CatJoint</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>