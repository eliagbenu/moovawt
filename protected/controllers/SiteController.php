<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionViewListing()
	{
	  Yii::app()->theme = 'classic';
		$id = $_GET['id'];
		Yii::app()->session['view_this_listing'] = $id;
		$this->render('viewListing',array('id'=>$id));
	}

	public function actionWelcome()
	{
	  Yii::app()->theme = 'classic';
	  $modelHangout = new Joints;
	  $jObj = new JointsClass;
	  
		if(isset($_POST['submit']))
		{
		// $model->attributes=$_POST['Joints'];
		 
		$joint_name = $_POST['Joints']['joint_name'];
		$joint_location= $_POST['Joints']['joint_location'];
		$joint_info= $_POST['Joints']['joint_info'] ;
		$joint_creator = intval(Yii::app()->session['user_id']);
        $joint_created= date('Y-m-d H:i:s');
         $joint_operations= $_POST['Joints']['joint_operations'] ;
         $joint_lati= $_POST['Joints']['joint_lati'] ;
         $joint_long= $_POST['Joints'] ['joint_long'];		 		 
         $cat_id= $_POST['Joints'] ['cat_id'];
		 	
			$jObj->saveJoint($joint_name,$joint_location,$joint_info,
			                 $joint_creator,$joint_created,$joint_operations,$joint_created,
							 $joint_operations,$joint_lati,$joint_long,$cat_id);
		
			
		}
	  
		$this->render('welcome',array('modelHangout'=>$modelHangout));
	}

	public function actionWelcome_enduser()
	{
	  Yii::app()->theme = 'classic';
	  $modelHangout = new Joints;
	  	 
		 if(isset($_POST['search']))
		 {
			$joint_name = $_POST['Joints']['joint_name'];
			$this->render('_joints_search',array('joint_name'=>$joint_name));
					 
		 }else{
		$this->render('welcome_enduser',array('modelHangout'=>$modelHangout));
		 	
		 }
	}

	public function actionSignup()
	{
		$model = new User;
		$userObj = new UserClass;
  
    if(isset($_POST['submit']))
    {
        $model->attributes=$_POST['User'];
		$email = $model->user_email;
		$password = $model->user_pass;
		$user_role = $model->user_role;		
		if(intval($user_role)==3){
		$userObj->saveEndUser($email, $password);			
		}else{
		$userObj->saveProprietor($email, $password);				
		}
		
		$a = Yii::app()->db->createCommand("select * from tbl_user
		                                   where user_email = '$email' ")->queryRow();
		Yii::app()->session['user_id']=$a['user_id'];
		
		//echo Yii::app()->session['user_id'];Yii::app()->end();
		if(intval($user_role)==3){
		$this->redirect(array('welcome_enduser'));				
		}else{	
		$this->redirect(array('welcome'));			
		}	
    }
		
		$this->render('signup',array('model'=>$model));
	}

	public function actionRating()
	{
		$model = new Joints;
		$jObj = new JointsClass;
  
    if(isset($_POST['submit']) && !empty($_POST['question_5']))
    {
      //  $model->attributes=$_POST['Joints'];
		$question_1= $_POST['question_1'];
		$question_2 = $_POST['question_2'];
		$question_3 = $_POST['question_3'];
		$question_4 = $_POST['question_4'];
		$question_5 = $_POST['question_5'];
		$id = Yii::app()->session['view_this_listing'];
								
		$jObj->rateJoint($question_1,$question_2,$question_3,$question_4,$question_5,$id);
		
		$this->redirect(array('ratingThanks'));		
    }
		
		//$this->render('rating');
		 Yii::app()->theme = 'classic';			
		$this->redirect(array('welcome_enduser'));	
	}
	
	public function actionRatingThanks()
	{
		 Yii::app()->theme = 'classic';		
		$this->render('ratingThanks');
	}
		
	public function actionSignin()
	{
		$model = new User;
		$userObj = new UserClass;
  
    if(isset($_POST['submit']))
    {
        $model->attributes=$_POST['User'];
		$email = $model->user_email;
		$password = $model->user_pass;
		$user_role = $model->user_role;		
		if(intval($user_role)==3){
		//$userObj->saveEndUser($email, $password);			
		}else{
		//$userObj->saveProprietor($email, $password);				
		}
		
		$a = Yii::app()->db->createCommand("select * from tbl_user
		                                   where user_email = '$email' ")->queryRow();
		Yii::app()->session['user_id']=$a['user_id'];
		Yii::app()->session['user_role']= $user_role;
		
		//echo Yii::app()->session['user_id'];Yii::app()->end();
		if(intval($user_role)==3){
		$this->redirect(array('welcome_enduser'));				
		}else{	
		$this->redirect(array('welcome'));			
		}	
    }
		

	}
		
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}