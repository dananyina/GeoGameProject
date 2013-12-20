
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
  var myLatlng = new google.maps.LatLng(50.450491667,30.523258333);
  var placeID = "<? echo $placeId ?>";
  
   var mapOptions = {
    zoom: 14,
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
<style> body { background: url(Untitled-1.jpg); } </style>
	<div id="header">
	<b> <font size="50" color="#4682B4" face="Comic Sans MS" >&nbsp &nbsp &nbspGeoGameProject</font></b>
		<table class="buttons">
			<tr>
				<td><a class="button large red" href="/"><span>Игра</span></a></td>
				<td><a class="button large red" href="/records"><span>Статистика</span></a></td>
				<td><a class="button large red" href="/all"><span>Места</span></a></td>
				<!--<td><li class="s1"><a href="/"><span class="z01c8m31" id="z01c8m31_1">Игра</span></a></td>
				<td><li class="s1"><a href="/records"><span class="z01c8m31" id="z01c8m31_1">Статистика</span></a></td>
				<td><li class="s1"><a href="/records"><a href="/all"><span class="z01c8m31" id="z01c8m31_1">Места</span></a></td>
			--></tr>
		</table>
	</div> 
	
	<div id="map_canvas"></div>
	
	<div >
    <?php include 'application/views/'.$content_view; ?>
	</div>
	
	<div id="footer"></div>
</body>
</html>