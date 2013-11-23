<?php
/* @var $this JointsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Joints',
);

$this->menu=array(
	array('label'=>'Create Joints', 'url'=>array('create')),
	array('label'=>'Manage Joints', 'url'=>array('admin')),
);
?>

<h1>Joints</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
