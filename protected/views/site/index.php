<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>
            <h3 class="text-error">What are you waiting for?(End User)</h3>

			<?php
			$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
			    'id'=>'signUpdialogEndUser',
			    // additional javascript options for the dialog plugin
			    'options'=>array(
			        'title'=>'End User',
			        'autoOpen'=>false,
			    ),
			));
			
				include("_endUser_signup_form.php");
				
			$this->endWidget('zii.widgets.jui.CJuiDialog');
			?>            
			
            <?php
			// the link that may open the dialog
			echo CHtml::link('Sign Up!', '#', array(
			   'onclick'=>'$("#signUpdialogEndUser").dialog("open"); return false;',
			));			
			?>
</p>

<p>
            <h3 class="text-error">What are you waiting for?(Proprietor)</h3>

			<?php
			$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
			    'id'=>'signUpdialogProprietor',
			    // additional javascript options for the dialog plugin
			    'options'=>array(
			        'title'=>'Proprietor',
			        'autoOpen'=>false,
			    ),
			));
			
				include("_proprietor_signup_form.php");
				
			$this->endWidget('zii.widgets.jui.CJuiDialog');
			?>            
			
            <?php
			// the link that may open the dialog
			echo CHtml::link('Sign Up!', '#', array(
			   'onclick'=>'$("#signUpdialogProprietor").dialog("open"); return false;',
			));			
			?>

</p>


