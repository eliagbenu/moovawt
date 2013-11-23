

<table>
	<tr>
		<td>
			<?php
			echo CHtml::link("<i class='icon-pencil'></i>Add hangout",'#', array(
 			  'onclick'=>'$("#hangoutDialog").dialog("open"); return false;',));
			?>
		</td>
		
		<td>
			<?php
			echo CHtml::link("<i class='icon-pencil'></i>Add Food",'/food/addFood');
			?>
		</td>
		
		<td>
			<?php
			echo CHtml::link("<i class='icon-pencil'></i>Add Event",'/event/addEvent');
			?>
		</td>				
	</tr>
</table>



<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'hangoutDialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Hangout',
        'autoOpen'=>false,
        'width'=>769,
        'height'=>506,
    ),
));

 $this->renderPartial('//joints/create',array('model'=>$modelHangout));

$this->endWidget('zii.widgets.jui.CJuiDialog');

?>