<?php
$this->pageTitle=Yii::app()->name . ' - Welcome';
?>

      <script src="http://maps.google.com/maps/api/js?sensor=false"
              type="text/javascript">
          </script>
              
<div style='min-hieght:200'>
	
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
      ['Wakye Joint', 5.643639299999999, -0.15227819999995518, 1],
          ['Naa Mame Kelewele', 5.663639299999999, -0.16227819999995518, 2],
          ['Kenkey Boutique', 5.663639299999999, -0.14227819999995518, 3],
          ['Super Noddles', 5.663639299999999, -0.12227819999995518, 4],
          ['Gina\'s Restaurant', 5.643639299999999, -0.13227819999995514, 5],
          ['Mamae Yaa Chop Bar', 5.643639299999999, -0.14227819999995515, 6],
          ['Kings Hotel', 5.653639299999999, -0.14227819999995516, 7],
          ['Lizzy\'s Spot', 5.663639299999999, -0.15227819999995517, 8],
          ['MEST', 5.644429, -0.15156600000000253, 9],            
    ];
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'pink-dot.png',      
      iconURLPrefix + 'yellow-dot.png'
    ]
    var icons_length = icons.length;
    
    
    var shadow = {
      anchor: new google.maps.Point(15,33),
      url: iconURLPrefix + 'msmarker.shadow.png'
    };

  
    var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: new google.maps.LatLng(5.644429, -0.15156600000000253),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 160
    });

    var marker;
    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon : icons[iconCounter],
        shadow: shadow
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= icons_length){
      	iconCounter = 0;
      }
    }

    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    AutoCenter();
  </script>  


</div>

<p>
	Find a spot and moovawt!
</p>

<div>
	<?php
	echo CHtml::image(Yii::app()->request->baseUrl.'/images/ogaroo.png');
	?>			
</div>

<div style="width:600px,height:500px">
	
<?php
$this->renderPartial('_reviews');
?>
	
<?php	
/*
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Search for hangouts'=>$this->renderPartial('_searchHangouts',array('modelHangout'=>$modelHangout),true),
        'Review'=>$this->renderPartial('_reviews',null,true),             
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
));
*/
?>	

</div>