<?php

class UserClass
{
		
public function saveEndUser($email,$password)
{

   Yii::app()->db->createCommand()
                ->insert('tbl_user',array(
                                          'user_username'=>$email, 
                                          'user_pass'=>sha1($password),
                                          'user_role'=>3,
                                          'user_reg_date'=>date('Y-m-d H:i:s'),
                                          'user_last_visit'=>date('Y-m-d H:i:s'),                                          
                                          'user_email'=>$email
                                           ));


}

public function saveProprietor($email,$password)
{

   Yii::app()->db->createCommand()
                ->insert('tbl_user',array(
                                          'user_username'=>$email, 
                                          'user_pass'=>sha1($password),
                                          'user_role'=>2,
                                          'user_reg_date'=>date('Y-m-d H:i:s'),
                                          'user_last_visit'=>date('Y-m-d H:i:s'),                                          
                                          'user_email'=>$email
                                           ));


}
	
	
}

?>