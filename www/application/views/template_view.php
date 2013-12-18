<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="../../css/main_css.css" />
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript">

	function initialize() {
		//центр карты
       var latlng = new google.maps.LatLng(55.748758, 37.6474);
       var myOptions = {
               zoom: 8,
               center: latlng,
               mapTypeId: google.maps.MapTypeId.ROADMAP
       };
       var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

       google.maps.event.addListener(map, "click", function(){
    	   placeMarker(event.latLng);
       });
	}

</script>
</head>
<body onload="initialize()">

	<div id="header">
		<table class="inside_div">
			<tr>
				<td><a href="/">Игра</a></td>
				<td><a href="/records">Статистика</a></td>
				<td><a href="/all">Места</a></td>
			</tr>
		</table>
	</div> 
	
	<div id="map_canvas" style="width:600px; height:450px"></div>
	
	<div id="main_part">
    <?php include 'application/views/'.$content_view; ?>
	</div>
	
	<div id="footer"></div>
</body>
</html>