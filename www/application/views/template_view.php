
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
	    zoom: 13,
	    center: myLatlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  }
	  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			
	  google.maps.event.addListener(map, 'click', function(event) {
	   
	   var loc1 = placeMarker(event.latLng);
	   var loc2 = getCorrectMarker();	  
	   alert(getPoints(loc1,loc2));
		 });
		 
	}
    var markerBefore;
	
	function placeMarker(location) {
	 if (markerBefore) {
	 alert("To try again - begin a new game");
	 } else {
	 markerBefore = new google.maps.Marker({
	 position: location,
	 animation: google.maps.Animation.DROP,
	 icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
	 map: map
	 });
	 }
	 
	 return location;
	}

	
function getCorrectMarker(){
 var loc2;
 var id = "<?php echo $data[0]["id"] ?>";


 $.ajax({
    type: "POST",
    data: {"id": id},
    dataType: "json",
    url: "/getlatlng",
	async: false,
     success: function(jsondata){
	     correctLatLng = new google.maps.LatLng(jsondata[0].x,jsondata[0].y);
		 loc2 = correctLatLng;
		 var markerAfter = new google.maps.Marker({
         position: correctLatLng,
		 icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
		 animation: google.maps.Animation.DROP,
         map: map
		 }); 
     },
  }); 

   return loc2;
}

	//super algorithm to get points
	function getPoints(loc1,loc2){
	
	Number.prototype.toRad = function() {
	return this * Math.PI / 180;
	}
	
	var lat1 = loc1.lat();
	var lat2 = loc2.lat();
	var lon1 = loc1.lng();
	var lon2 = loc2.lng();
	
		
	var R = 6371; // km
	var x1 = lat2-lat1;
	var dLat = x1.toRad();
	var x2 = lon2-lon1;
	var dLon = x2.toRad();
	
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
                Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
                Math.sin(dLon/2) * Math.sin(dLon/2);  
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c;
	var magicNumber = 23.671
	return (d*magicNumber);
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