<?php
/* @var $this JointsController */
/* @var $model Joints */
/* @var $form CActiveForm */
?>

<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'this-form',
	'enableAjaxValidation'=>false,
	"enableClientValidation"=>true,	
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
							),		
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'joint_name'); ?>
		<?php echo $form->textField($model,'joint_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'joint_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joint_keywords'); ?>
		<?php echo $form->textField($model,'joint_keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'joint_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joint_location'); ?>
		<?php echo $form->textField($model,'joint_location',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'joint_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joint_info'); ?>
		<?php echo $form->textArea($model,'joint_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'joint_info'); ?>
	</div>

<!--
		<div class="row">
		<?php echo $form->labelEx($model,'joint_creator'); ?>
		<?php echo $form->textField($model,'joint_creator'); ?>
		<?php echo $form->error($model,'joint_creator'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id'); ?>
		<?php echo $form->error($model,'list_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'joint_created'); ?>
		<?php echo $form->textField($model,'joint_created'); ?>
		<?php echo $form->error($model,'joint_created'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'joint_logo'); ?>
		<?php
		echo $form->fileField($model, 'joint_logo');
		?>
		<?php echo $form->error($model,'joint_logo'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'joint_lati'); ?>
		<?php echo $form->textField($model,'joint_lati',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'joint_lati'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joint_long'); ?>
		<?php echo $form->textField($model,'joint_long',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'joint_long'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'joint_images'); ?>
		<?php echo $form->textField($model,'joint_images',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'joint_images'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'joint_operations'); ?>
		<?php echo $form->textField($model,'joint_operations',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'joint_operations'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id',array('1'=>'Food','2'=>'Restaurant')); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->