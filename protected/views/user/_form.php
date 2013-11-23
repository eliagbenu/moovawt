<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_username'); ?>
		<?php echo $form->textField($model,'user_username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_fullname'); ?>
		<?php echo $form->textField($model,'user_fullname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'user_fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pass'); ?>
		<?php echo $form->textField($model,'user_pass',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_active'); ?>
		<?php echo $form->textField($model,'user_active'); ?>
		<?php echo $form->error($model,'user_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_reg_date'); ?>
		<?php echo $form->textField($model,'user_reg_date'); ?>
		<?php echo $form->error($model,'user_reg_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_last_visit'); ?>
		<?php echo $form->textField($model,'user_last_visit'); ?>
		<?php echo $form->error($model,'user_last_visit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_role'); ?>
		<?php echo $form->textField($model,'user_role'); ?>
		<?php echo $form->error($model,'user_role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->