<?php
$this->pageTitle=Yii::app()->name . ' - Welcome';
?>

<div style='min-hieght:200'>
<?php
$this->widget('ext.easymap.EasyMap', array(
    'key' => 'AIzaSyDwKhmaAz0jOuEabXK4sUAjv-g7HzdfyIc', /*Insert your developer API key for google map*/
    'id' => 'newmap', /*This is the id of the map wrapper div*/
    'latitude' => '5.644429',
    'longitude' => '-0.15156600000000253',
    'maptype' => 'ROADMAP', /*ROADMAP, SATELITE, HYBRID, TERRAIN*/
    'zoom' => '15',
    'width' => '740',
    'height' => '400',
    'markertitle' => '', /*Title of the place marker*/
));
?>	


</div>

<p>
	Find a spot and moovawt!
</p>

<div>
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/ogaroo.png');
	?>			
</div>

<div style="width:600px,height:500px">
	
<?php
$this->renderPartial('_reviews');
?>
	
<?php	
/*
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Search for hangouts'=>$this->renderPartial('_searchHangouts',array('modelHangout'=>$modelHangout),true),
        'Review'=>$this->renderPartial('_reviews',null,true),             
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
));
*/
?>	

</div>