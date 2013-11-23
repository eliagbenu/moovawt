   
    <div class="slider-bootstrap"><!-- start slider -->
	<!--
	   	<iframe src="http://player.vimeo.com/video/7449107?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff&amp;autoplay=0" width="960" height="430" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	-->
	<iframe width="853" height="480" src="//www.youtube.com/embed/bSCH2L_pNXk" frameborder="0" allowfullscreen></iframe>    
    
    </div> <!-- /slider -->
    
    	<div class="row-fluid">
            <div class="span6">

            <h3 class="text-error">What are you waiting for?(End User)</h3>

			<?php
			$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
			    'id'=>'signUpdialogEndUser',
			    // additional javascript options for the dialog plugin
			    'options'=>array(
			        'title'=>'Dialog box 1',
			        'autoOpen'=>false,
			    ),
			));
			
			    echo 'dialog content here';
				
				
			
			$this->endWidget('zii.widgets.jui.CJuiDialog');
			?>            
			
            <!--
            <button class="btn btn-large btn-warning" type="button">Sign Up!</button>
            -->

            <?php
			// the link that may open the dialog
			echo CHtml::link('Sign Up!', '#', array(
			   'onclick'=>'$("#signUpdialogEndUser").dialog("open"); return false;',
			));			
			?>

            </div>
            
            <div class="span6" style="text-align:center;">
            
            <h3 class="text-error">What are you waiting for?(Proprietor)</h3>

			<?php
			$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
			    'id'=>'signUpdialogProprietor',
			    // additional javascript options for the dialog plugin
			    'options'=>array(
			        'title'=>'Dialog box 1',
			        'autoOpen'=>false,
			    ),
			));
			
			    echo 'dialog content here';
				
				
			
			$this->endWidget('zii.widgets.jui.CJuiDialog');
			?>            
			
            <!--
            <button class="btn btn-large btn-warning" type="button">Sign Up!</button>
            -->

            <?php
			// the link that may open the dialog
			echo CHtml::link('Sign Up!', '#', array(
			   'onclick'=>'$("#signUpdialogProprietor").dialog("open"); return false;',
			));			
			?>

                        
            </div>
            
        </div>
      
      <h3 class="header">Our approach
      	<span class="header-line"></span>  
      </h3>
          
      <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span6">
                <div class="thumbnail">
                                  
                  	<div class="round_background r-yellow pull-left">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-01.png" alt="" class="">
                     </div>
                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam.</p>
                </div>
              </li>
              <li class="span6">
                <div class="thumbnail">
                	
                     <div class="round_background r-yellow pull-left">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                     </div>
                 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam.</p>
                </div>
              </li>
              </ul>
              <ul class="thumbnails">
              <li class="span6">
                <div class="thumbnail">
                  	<div class="round_background r-yellow pull-left">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-37.png" alt="" class="">
                     </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam.</p>
                </div>
              </li>
              <li class="span6">
                <div class="thumbnail">
                  <div class="round_background r-yellow pull-left">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-17.png" alt="" class="">
                     </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam.</p>
                </div>
              </li>

            </ul>
        </div>
       
     
      <h3 class="header">Testimonials
      	<span class="header-line"></span>  
      </h3>
 
       <div class="row-fluid">

        <div class="span10 center">
            <blockquote>sssssss</blockquote>
        </div>
   </div>

      <h3 class="header">Popular hangouts
      	<span class="header-line"></span>  
      </h3>
        
      <div class="row-fluid">

        <div class="span3 center">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/themeforest.png" alt="Themeforest" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/codecanyon.png" alt="Codecanyon" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/graphicriver.png" alt="Graphicriver" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/photodune.png" alt="Photodune" />
        </div>
   </div><!--/row-fluid-->
    