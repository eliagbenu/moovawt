<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Thanks';

?>

<div class="flash-success">

<?php 
 $id = Yii::app()->session['view_this_listing'];
 $a=Yii::app()->db->createCommand("select * from tbl_joints where joint_id = $id")->queryRow(); ?>
 	
 Thanks for rating <?php echo $a['joint_name']; ?>
</div>

    <?php echo CHtml::link('Home',array('site/welcome_enduser'),array('class'=>'btn btn-success')); ?>