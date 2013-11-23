<?php
/* @var $this CatJointController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Joints',
);

$this->menu=array(
	array('label'=>'Create CatJoint', 'url'=>array('create')),
	array('label'=>'Manage CatJoint', 'url'=>array('admin')),
);
?>

<h1>Cat Joints</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
