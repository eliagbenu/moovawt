<?php
$this->pageTitle=Yii::app()->name . ' - Listings';
?>
<div style='min-hieght:200'>

<?php
$sql = "select *
                from tbl_joints where joint_id= $id";
$a = Yii::app()->db->createCommand($sql)->queryRow();
?>
	
<?php
$this->widget('ext.easymap.EasyMap', array(
    'key' => 'AIzaSyDwKhmaAz0jOuEabXK4sUAjv-g7HzdfyIc', /*Insert your developer API key for google map*/
    'id' => 'newmap', /*This is the id of the map wrapper div*/
    'latitude' => $a['joint_lati'],
    'longitude' => $a['joint_long'],//'-0.15156600000000253',
    'maptype' => 'ROADMAP', /*ROADMAP, SATELITE, HYBRID, TERRAIN*/
    'zoom' => '15',
    'width' => '740',
    'height' => '400',
    'markertitle' => $a['joint_name'], /*Title of the place marker*/
));
?>	



</div>


<h2><?php echo $a['joint_name']; ?></h2>


<div>

<div style="width:100%"> 
<table>
	<tr>
		<td>
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$a['joint_logo']);
	?>	
		</td>
		<td>
			<h3> Info</h3>
			<blockquote>
				<?php echo $a['joint_info']; ?>
			</blockquote>
		</td>
	<td rowspan='2' align='right'>
	
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/thoughtworks.jpg');
	?>		
		
		</td>	

	</tr>
	<tr>
		<th>Location</th> 	<td><?php echo $a['joint_location']; ?></td>
	</tr>
	<tr>
		<th>Keywords</th> 	<td><?php
		                             $b= explode(',',$a['joint_location']); 
									 for($i=0;$i<count($b); $i++){
									echo "<p> <em>".$b[$i]."</em></p>";									 	
									 }
		                          ?></td>
	</tr>
	<tr>
		<th>Operations</th> 	<td><?php echo $a['joint_operations']; ?></td>
	</tr>		
</table>	

<?php
// the link that may open the dialog
echo CHtml::link('Interested in rating '.$a['joint_name'].'?', '#',array('class'=>'btn btn-large btn-block btn-success',
									  'onclick'=>'$("#mydialogRating").dialog("open"); return false;'));						
?>
</div>

	
</div>


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'mydialogRating',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Top Five Questions',
        'autoOpen'=>false,
         'width'=>490,
        'height'=>406,
    ),
));

$model = new Joints;
?>
<div class='form' style='margin: auto'>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'this-form1',
	'action'=>CController::createUrl('site/rating'),
	'enableAjaxValidation'=>false,
	"enableClientValidation"=>true,	
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
							),		
)); ?>

<?php echo $form->errorSummary($model); ?>

<p>
<div class="row">
    <?php echo $form->labelEx($model,'question_1'); ?>
	<?php $this->widget('CStarRating',array('name'=>'question_1')); ?>
    <?php echo $form->error($model,'question_1'); ?>
</div>
</p>


<p>
<div class="row">
    <?php echo $form->labelEx($model,'question_2'); ?>
	<?php $this->widget('CStarRating',array('name'=>'question_2')); ?>
    <?php echo $form->error($model,'question_2'); ?>
</div>	
</p>	

<p>
<div class="row">
    <?php echo $form->labelEx($model,'question_3'); ?>
	<?php $this->widget('CStarRating',array('name'=>'question_3')); ?>
    <?php echo $form->error($model,'question_3'); ?>
</div>	
</p>	

<p>
<div class="row">
    <?php echo $form->labelEx($model,'question_4'); ?>
	<?php $this->widget('CStarRating',array('name'=>'question_4')); ?>
    <?php echo $form->error($model,'question_4'); ?>
</div>
</p>	

<p>
	<div class="row">
    <?php echo $form->labelEx($model,'question_5'); ?>
	<?php $this->widget('CStarRating',array('name'=>'question_5')); ?>
    <?php echo $form->error($model,'question_5'); ?>
	</div>
</p>

<div class="row">
    <?php echo Chtml::submitButton('Rate',array('name'=>'submit','class'=>'btn btn-success')); ?>
</div>


<?php $this->endWidget(); ?>

	
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>