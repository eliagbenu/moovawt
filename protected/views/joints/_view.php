<?php
/* @var $this JointsController */
/* @var $data Joints */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->joint_id), array('view', 'id'=>$data->joint_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_name')); ?>:</b>
	<?php echo CHtml::encode($data->joint_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->joint_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_location')); ?>:</b>
	<?php echo CHtml::encode($data->joint_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_info')); ?>:</b>
	<?php echo CHtml::encode($data->joint_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_creator')); ?>:</b>
	<?php echo CHtml::encode($data->joint_creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::encode($data->list_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_created')); ?>:</b>
	<?php echo CHtml::encode($data->joint_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_logo')); ?>:</b>
	<?php echo CHtml::encode($data->joint_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_lati')); ?>:</b>
	<?php echo CHtml::encode($data->joint_lati); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_long')); ?>:</b>
	<?php echo CHtml::encode($data->joint_long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_images')); ?>:</b>
	<?php echo CHtml::encode($data->joint_images); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joint_operations')); ?>:</b>
	<?php echo CHtml::encode($data->joint_operations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	*/ ?>

</div>