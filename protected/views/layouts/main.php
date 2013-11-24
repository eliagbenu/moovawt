<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	

</head>

<body>

<div class="container" id="page">

	<div id="header" style='background:#000'>
		<div id="logo"><?php
						// echo CHtml::encode(Yii::app()->name); 
						$img = CHtml::image(Yii::app()->request->baseUrl.'/images/logo.png');
						if(Yii::app()->session['user_role']==2){
						echo CHtml::link($img,array('site/welcome'));							
						}else{
						echo CHtml::link($img,array('site/welcome_enduser'));							
						}

						?></div>
						


	<div id="mainmenu">
	<div style="float:right">
		<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php

$sql_a = Yii::app()->db->createCommand("select joint_name from tbl_joints")->queryColumn();
$modelHangout=new Joints;

$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
    'name'=>'Joints[joint_name]',
    'model'=>$modelHangout,
    'source'=>$sql_a,
    // additional javascript options for the autocomplete plugin
    'options'=>array(
        'minLength'=>'1',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
    ),
));

?>
 
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Search',array('name'=>'search','style'=>'float:right')); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
	</div>					
	</div><!-- header -->		
		<?php
		/*
		 $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		 * 
		 */?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
