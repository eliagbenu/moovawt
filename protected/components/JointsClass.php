<?php

class JointsClass
{
		
public function saveJoint($joint_name,$joint_location,$joint_info,
			                 $joint_creator,$joint_created,$joint_operations,$joint_created,
							 $joint_operations,$joint_lati,$joint_long,$cat_id)
{

						  
   Yii::app()->db->createCommand()
                ->insert('tbl_joints',array(
                                          'joint_name'=>$joint_name, 
                                          'joint_location'=>$joint_location,
                                          'cat_id'=>$cat_id,
                                          'joint_lati'=>$joint_lati,
                                          'joint_long'=>$joint_long,                                          
                                          'joint_creator'=>$joint_creator
                                           ));

}
	
public function rateJoint($question_1,$question_2,$question_3,$question_4,$question_5,$id)
{
$listing_id= $id;
$sql = "select * from tbl_listing_rating where listing_id= $id";
$a = Yii::app()->db->createCommand($sql)->queryRow();
if(empty($a['listing_id'])){
   Yii::app()->db->createCommand()
                ->insert('tbl_listing_rating',array(
                                          'listing_id'=>$listing_id, 
                                          'question_1'=>$question_1,
                                          'question_2'=>$question_2,
                                          'question_3'=>$question_3,
                                          'question_4'=>$question_4,                                          
                                          'question_5'=>$question_5
                                           ));	
}else{
	   Yii::app()->db->createCommand()
                ->update('tbl_listing_rating',
                			array(
    						  'question_1'=>$question_1,
                              'question_2'=>$question_2, 
                              'question_3'=>$question_3,
                              'question_4'=>$question_4,   
                              'question_5'=>$question_5,                                                                                                                                                                                                                                  
                                  ),
								"listing_id = '$listing_id' "
									);		
}


}
	
}

?>