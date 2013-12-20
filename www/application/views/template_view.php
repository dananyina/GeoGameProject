
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="../../css/main_css.css" />
	<script type="text/javascript" src="../../js/jquery.js"></script>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript">
	var map;
	function initialize() {
	  var myLatlng = new google.maps.LatLng(50.3338,30.5066);
	  
	   var mapOptions = {
	    zoom: 2,
	    center: myLatlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  }
	  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	  google.maps.event.addListener(map, 'click', function(event) {
	    placeMarker(event.latLng);
	    getCorrectMarker();
	  });
	}

	function placeMarker(location) {
	 var markerBefore = new google.maps.Marker({
	 position: location,
	 animation: google.maps.Animation.DROP,
	 icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
	 map: map
	 });
	}

	function getCorrectMarker(){
	 var id = "<?php echo $data[0]["id"] ?>";
	 
	 $.ajax({
	    type: "POST",
	    data: {"id": id},
	    dataType: "json",
	    url: "/getlatlng",
	     success: function(jsondata){
	         var correctLatLng = new google.maps.LatLng(jsondata[0].x,jsondata[0].y);
	         var markerAfter = new google.maps.Marker({
	         position: correctLatLng,
			 animation: google.maps.Animation.DROP,
			 icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
	         map: map
	         });
	     }
	  });
	}
	</script>
</head>
<body onload="initialize()">
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