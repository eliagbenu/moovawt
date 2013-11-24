<?php
$sql = "select joint_id as id, joint_name, joint_keywords, 
				 joint_info,joint_logo,
               joint_location
                from tbl_joints";

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
?>


<div>
	
	<div style='width:75%;float:left;'>
<?php

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

?>		
	</div>
	
	<div style='width:15%;float:right'>
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo_meltwater.jpg');
	?>	
	</div>	
</div>