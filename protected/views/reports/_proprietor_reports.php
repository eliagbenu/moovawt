
<h4>Ratings </h4>
<?php

	$a = Yii::app()->db->createCommand("select question_1,question_2,question_3,
											   question_4,question_5
										from tbl_listing_rating
										where listing_id = 11")->queryRow();
										
	$b = array($a['question_1'],$a['question_2'],$a['question_3'],$a['question_4'],$a['question_5']);
	
        $this->widget(
            'chartjs.widgets.ChBars', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'labels' => array("Q1","Q2","Q3","Q4","Q5"),
                'datasets' => array(
                    array(
                        "fillColor" => "#ffa500",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "data" => $b,//array(10, 20, 30, 40, 50, 60)
                    )       
                ),
                'options' => array()
            )
        ); 
    
        ?>