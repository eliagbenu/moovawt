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
	
	
}

?>