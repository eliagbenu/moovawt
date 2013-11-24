<?php

$sql = "select joint_id as id, joint_name, joint_keywords, 
				 joint_info,joint_logo,
               joint_location
                from tbl_joints";
$sql_b = Yii::app()->db->createCommand($sql)->query();				
/*
$count=Yii::app()->db->createCommand($sql)->queryScalar();

$dataProvider=new CSqlDataProvider($sql, array(
    'totalItemCount'=>$count,
    'sort'=>array(
        'attributes'=>array(
             'id', 'joint_name', 'joint_keywords',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>3,
    ),
));
 */ 
?>


<div style='margin-top:20px'>
	
	<div style='width:75%;float:left;'>
		
		<h2>Listings</h2>
<table>
		
<?php

  while($b= $sql_b->read())
  {
  	$bd = Yii::app()->db->createCommand("select * from tbl_listing_rating where listing_id =".$b['id']." ")->queryRow();
	
  	$rating = intval($bd['question_1'])+ intval($bd['question_2']) + intval($bd['question_3']) + intval($bd['question_4'])+intval($bd['question_5']);
	$rating = $rating/5;
?>
	<tr height="111px">
		<td>
	<?php echo CHtml::link($b['joint_name'], array('site/viewListing','id'=>$b['id'])); ?>	
		</td>
		<td><i style='font-size:15px'>Ratings:</i>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php
			echo CHtml::image(Yii::app()->request->baseUrl.'/images/star.png');?>&nbsp;&nbsp;&nbsp;&nbsp; 
			<?php echo $rating;?></td>
	</tr>
	<tr>
		<td> 
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/pix2.jpg');
	?>					
		</td>
		<td>
	<?php echo $b['joint_info']; ?>					
		</td>				
	</tr>
<?php  		
  }

/*
$this->widget('zii.widgets.grid.CGridView', 
                 array(
				       'dataProvider'=>$dataProvider,
					   'htmlOptions'=>array(
					                          'style'=>'position:relative;top:0px;cursor:arrow;'),
					   'columns'=>array(

										array( 'header'=>'Image',
										      'class'=>'CButtonColumn',
										      'template'=>'{viewListing}',
										      'buttons'=> array(
										                 'viewListing'=>array(
											                  'label'=>'Pix',
											                  'imageUrl'=>Yii::app()->request->baseUrl."/images/pix2.jpg",											                     
															  'url'=>'Yii::app()->createUrl("site/viewListing",array("id"=>$data["id"]))',	                 
																				 )											                    
																),
											  ), 
											  
					                    array('name'=>'joint_name', 'header'=>'Name', 
					                    	   'value'=>'$data["joint_name"]'),						                    				                    
		
					                    	  
					                    array('name'=>'joint_info', 'header'=>'Info', 
					                          'value'=>'$data["joint_info"]'),						
					                    array('name'=>'joint_location', 'header'=>'Location', 
					                          'value'=>'$data["joint_location"]'),				
					                          							                    

											  
											                           					
										),					 
											 ));
											 
*/

?></table>		
	</div>
	
	<div style='width:15%;float:right'>
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo_meltwater.jpg');
	?>	
	</div>	
</div>