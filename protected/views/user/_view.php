<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_username')); ?>:</b>
	<?php echo CHtml::encode($data->user_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_fullname')); ?>:</b>
	<?php echo CHtml::encode($data->user_fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pass')); ?>:</b>
	<?php echo CHtml::encode($data->user_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_active')); ?>:</b>
	<?php echo CHtml::encode($data->user_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_reg_date')); ?>:</b>
	<?php echo CHtml::encode($data->user_reg_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_visit')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_visit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_role')); ?>:</b>
	<?php echo CHtml::encode($data->user_role); ?>
	<br />

	*/ ?>

</div>