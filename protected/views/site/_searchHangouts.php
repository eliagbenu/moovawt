

<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php

$sql_a = Yii::app()->db->createCommand("select joint_name from tbl_joints")->queryColumn();


$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
    'name'=>'Joints[joint_name]',
    'model'=>$modelHangout,
    'source'=>$sql_a,
    // additional javascript options for the autocomplete plugin
    'options'=>array(
        'minLength'=>'1',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
    ),
));

?>
 
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Search',array('name'=>'search')); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->