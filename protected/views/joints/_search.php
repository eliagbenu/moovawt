<?php
/* @var $this JointsController */
/* @var $model Joints */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'joint_id'); ?>
		<?php echo $form->textField($model,'joint_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_name'); ?>
		<?php echo $form->textField($model,'joint_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_keywords'); ?>
		<?php echo $form->textField($model,'joint_keywords',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_location'); ?>
		<?php echo $form->textField($model,'joint_location',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_info'); ?>
		<?php echo $form->textArea($model,'joint_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_creator'); ?>
		<?php echo $form->textField($model,'joint_creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_created'); ?>
		<?php echo $form->textField($model,'joint_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_logo'); ?>
		<?php echo $form->textField($model,'joint_logo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_lati'); ?>
		<?php echo $form->textField($model,'joint_lati',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_long'); ?>
		<?php echo $form->textField($model,'joint_long',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_images'); ?>
		<?php echo $form->textField($model,'joint_images',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joint_operations'); ?>
		<?php echo $form->textField($model,'joint_operations',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->