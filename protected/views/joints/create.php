<?php
/* @var $this JointsController */
/* @var $model Joints */

$this->breadcrumbs=array(
	'Joints'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Joints', 'url'=>array('index')),
	array('label'=>'Manage Joints', 'url'=>array('admin')),
);
?>

<h1>Create Joints</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>