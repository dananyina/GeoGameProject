
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="../../css/main_css.css" />
	

	
	
	<?php $placeId = $data[0]["id"]; ?>
	
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript">
var map;
function initialize() {
  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
  var placeID = "<? echo $placeId ?>";
  
   var mapOptions = {
    zoom: 4,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
	
	$.ajax({
	dataType: 'json',
	url: '/getlatlng?action=placeID',
	success: function(jsondata){
    $('.results').html('x = ' + jsondata.x + ', y = ' + jsondata.y);
	
  }
});


  });
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
      position: location,
      map: map
  });

  map.setCenter(location);
}
</script>
</head>
<body onload="initialize()">

	<div id="header">
		<table class="inside_div">
			<tr>
				<td><a href="/">Игра</a></td>
				<td>
					<form action="">
					<button type="submit">Кнопка - ссылка</button>
					</form>
				</td>
				<td><a href="/places.html">Статистика</a></td>
				<td><a href="/all">Места</a></td>
			</tr>
		</table>
	</div> 
	
	<div id="map_canvas" style= "width:600px; height:350px"></div>
	
	<div id="main_part">
    <?php include 'application/views/'.$content_view; ?>
	</div>
	
	<div id="footer"></div>
</body>
</html>