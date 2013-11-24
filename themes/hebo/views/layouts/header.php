<div class="container">
<div class="row-fluid">

  <div class="span12">
		<a href="" class="logo"></a>
		
  </div><!--/.span6 -->
       		<div class="span4">
       			<div class="slider-bootstrap"><!-- start slider -->
	<!--
	   	<iframe src="http://player.vimeo.com/video/7449107?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff&amp;autoplay=0" width="960" height="430" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	-->
	<iframe width="440" height="400" src="//www.youtube.com/embed/bSCH2L_pNXk" frameborder="1" allowfullscreen></iframe>    
    
    </div> <!-- /slider -->
    
       		</div>
       		
       		
       		
       		
            <div class="span6 offset1" align="center">
			<a href="" class="logo"></a>
			
			<div class='row-fluid'>
				<div class='span4'>
					<h1 class="text-warning"><b>Food</b></h1>
				</div>
			<div class='span4'>
					<h1 class="text-warning"><b>Hangouts</b></h1>
				</div>	
			<div class='span4'>
					<h1 class="text-warning"><b>Events</b></h1>
				</div>					
			</div>

			<div class='row-fluid'>
				<div class='span4'>
					<!-- <i class='icon-glass icon-white icon-th-large'> </i>
						-->	

				</div>
			<div class='span4'>
				<!--	<i class='icon-qrcode icon-white icon-large'> </i>
				-->
				</div>	
			<div class='span4'>
				<!--	<i class='icon-music icon-white icon-large '> </i>
				-->	
				</div>					
			</div>
			
			<div class='row-fluid'>
				<div class='span6'>   
			      <?php
			// the link that may open the dialog
			echo CHtml::link('Sign Up!', '#',array('class'=>'btn btn-large btn-block btn-success',
												  'onclick'=>'$("#mydialogSignUp").dialog("open"); return false;'));						
			?>

            <?php
			// the link that may open the dialog
			//echo CHtml::link('Sign Up!', array('/site/signup'),array('class'=>'btn btn-success'));			
			?>
				</div>
				
			<div class='span6'>
			      <?php
			// the link that may open the dialog
			echo CHtml::link('Sign In', '#',array('class'=>'btn btn-large btn-block btn-warning',
												  'onclick'=>'$("#mydialogSignIn").dialog("open"); return false;'));						
			?>				
            <?php
			// the link that may open the dialog
			//echo CHtml::link('Sign In!', array('/site/signin'),array('class'=>'btn btn-large btn-block btn-warning'));			
			?>
				</div>		
							
			</div>  

            </div>
            
  <!-- start of sign up-->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'mydialogSignUp',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Sign up',
        'autoOpen'=>false,
         'width'=>490,
        'height'=>406,
    ),
));

$model = new User;
?>
<div class='form' style='margin: auto'>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'this-form1',
	'action'=>CController::createUrl('site/signup'),
	'enableAjaxValidation'=>false,
	"enableClientValidation"=>true,	
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
							),		
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'user_email'); ?>
    <?php echo $form->textField($model,'user_email'); ?>
    <?php echo $form->error($model,'user_email'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'user_pass'); ?>
    <?php echo $form->passwordField($model,'user_pass'); ?>
    <?php echo $form->error($model,'user_pass'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'user_role'); ?>
    <?php echo $form->dropDownList($model,'user_role',array(''=>'Select One','3'=>'End User',
    														'2'=>'Proprietor')); ?>
    <?php echo $form->error($model,'user_role'); ?>
</div>

<div class="row">
    <?php echo Chtml::submitButton('Signup',array('name'=>'submit','class'=>'btn btn-success')); ?>
</div>


<?php $this->endWidget(); ?>

	
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>
  <!-- end of sign up-->
   
   
   
     <!-- start of signin-->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'mydialogSignIn',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Sign in',
        'autoOpen'=>false,
         'width'=>490,
        'height'=>406,
    ),
));

$model = new User;
?>
<div class='form' style='margin: auto'>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'this-form2',
	'action'=>CController::createUrl('site/signin'),
	'enableAjaxValidation'=>false,
	"enableClientValidation"=>true,	
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
							),		
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'user_email'); ?>
    <?php echo $form->textField($model,'user_email'); ?>
    <?php echo $form->error($model,'user_email'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'user_pass'); ?>
    <?php echo $form->passwordField($model,'user_pass'); ?>
    <?php echo $form->error($model,'user_pass'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'user_role'); ?>
    <?php echo $form->dropDownList($model,'user_role',array(''=>'Select One','3'=>'End User',
    														'2'=>'Proprietor')); ?>
    <?php echo $form->error($model,'user_role'); ?>
</div>

<div class="row">
    <?php echo Chtml::submitButton('Sign In',array('name'=>'submit','class'=>'btn btn-success')); ?>
</div>


<?php $this->endWidget(); ?>

	
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>
  <!-- end of sign in-->
  </div><!--/.span6 -->
</div><!--/.row-fluid header -->
</div>