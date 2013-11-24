<?php
$sql = "select joint_id as id, joint_name, joint_keywords, 
				 joint_info,  
               joint_location
                from tbl_joints where joint_name = '$joint_name' ";

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

<?php

$this->widget('zii.widgets.grid.CGridView', 
                 array(
				       'dataProvider'=>$dataProvider,
					   'htmlOptions'=>array(
					                          'style'=>'position:relative;top:0px;cursor:arrow;'),
					   'columns'=>array(
					                 //   array('name'=>'number', 'header'=>'No.', 'value'=>'$row+1'),
					                    array('name'=>'joint_name', 'header'=>'Name', 
					                    	   'value'=>'$data["joint_name"]'),						                    				                    
					                 /*   array('name'=>'joint_keywords', 'header'=>'Keywords', 
					                    	  'value'=>'$data["joint_keywords"]'), */
					                    	  
					                    array('name'=>'joint_info', 'header'=>'Info', 
					                          'value'=>'$data["joint_info"]'),						
					                    array('name'=>'joint_location', 'header'=>'Location', 
					                          'value'=>'$data["joint_location"]'),				
					                          				/*
					                    array('name'=>'joint_logo', 'header'=>'Pix', 
					                          'value'=>'$data["joint_logo"]'),
															 */								                    
										array( 'header'=>'Image',
										      'class'=>'CButtonColumn',
										      'template'=>'{viewListing}',
										      'buttons'=> array(
										                 'viewListing'=>array(
											                  'label'=>'Pix',
											                  'imageUrl'=>Yii::app()->request->baseUrl."/images/pix1.jpg",											                     
															  'url'=>'Yii::app()->createUrl("site/viewListing",array("id"=>$data["id"]))',	                 
																				 )											                    
																),
											  ),                          					
										),					 
											 ));

?>

