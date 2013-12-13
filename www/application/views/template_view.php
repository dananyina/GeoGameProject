<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="../../css/main_css.css" />
	<script src="../../js/jquery.js" type="text/javascript"></script>
	<script src='http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjpkAC9ePGem0lIq5XcMiuhR_wWLPFku8Ix9i2SXYRVK3e45q1BQUd_beF8dtzKET_EteAjPdGDwqpQ'></script>
    <link rel="stylesheet" href="../../map/theme/default/style.css" type="text/css">
	
	<style type="text/css">
        html, body {
            height: 100%;
        }
        #map {
            width: 100%;
            height: 80%;
            border: 1px solid black;
        }
        .olPopup p { margin:0px; font-size: .9em;}
        .olPopup h2 { font-size:1.2em; }
    </style>
	<script src="../../map/lib/OpenLayers.js"></script>
    <script type="text/javascript">
        var lon = 5;
        var lat = 40;
        var zoom = 5;
		
        var map, select;

        function init(){
            var options = {
				
			
                projection: new OpenLayers.Projection("EPSG:900913"),
                displayProjection: new OpenLayers.Projection("EPSG:4326")
												
            };
            map = new OpenLayers.Map('map', options);
			
			
           
			
            var mapnik = new OpenLayers.Layer.OSM("OpenStreetMap (Mapnik)");
            var gmap = new OpenLayers.Layer.Google("Google", {sphericalMercator:true});
            var sundials = new OpenLayers.Layer.Vector("KML", {
                projection: map.displayProjection,
                strategies: [new OpenLayers.Strategy.Fixed()],
                protocol: new OpenLayers.Protocol.HTTP({
                    url: "kml/sundials.kml",
                    format: new OpenLayers.Format.KML({
                        extractStyles: true,
                        extractAttributes: true
                    })
                })
            });

            map.addLayers([mapnik, gmap, sundials]);

            select = new OpenLayers.Control.SelectFeature(sundials);
            
            sundials.events.on({
                "featureselected": onFeatureSelect,
                "featureunselected": onFeatureUnselect
            });
  
            map.addControl(select);
            select.activate();   

            map.addControl(new OpenLayers.Control.LayerSwitcher());
			
			//cdsfdsfdsfds
			 map.addControl(
                new OpenLayers.Control.MousePosition({
                    prefix: '<a target="_blank" ' +
                        'href="http://spatialreference.org/ref/epsg/4326/">' +
                        'EPSG:4326</a> coordinates: ',
                    separator: ' | ',
                    numDigits: 2,
                    emptyString: 'Mouse is not over map.'
                })
            );
						           
            map.events.register("mousemove", map, function(e) {
                var position = this.events.getMousePosition(e);
                OpenLayers.Util.getElement("coords").innerHTML = position;
            });
        
			//fdsfdsfs
            map.zoomToExtent(
                new OpenLayers.Bounds(
                     24.484414, 45.381836, 38.662109, 52.628906
                ).transform(map.displayProjection, map.projection)
            );
			
			var click = new OpenLayers.Control.Click();
                map.addControl(click);
                click.activate();
				
        }
        function onPopupClose(evt) {
            select.unselectAll();
        }
        function onFeatureSelect(event) {
            var feature = event.feature;
            
			var selectedFeature = feature;
            var popup = new OpenLayers.Popup.FramedCloud("chicken", 
                feature.geometry.getBounds().getCenterLonLat(),
                new OpenLayers.Size(100,100),
                "<h2>"+feature.attributes.name + "</h2>" + feature.attributes.description,
                null, true, onPopupClose
            );
            feature.popup = popup;
            map.addPopup(popup);
        }
        function onFeatureUnselect(event) {
            var feature = event.feature;
            if(feature.popup) {
                map.removePopup(feature.popup);
                feature.popup.destroy();
                delete feature.popup;
            }
        }
		//Click Handler
		 OpenLayers.Control.Click = OpenLayers.Class(OpenLayers.Control, {                
                defaultHandlerOptions: {
                    'single': true,
                    'double': false,
                    'pixelTolerance': 0,
                    'stopSingle': false,
                    'stopDouble': false
                },

                initialize: function(options) {
                    this.handlerOptions = OpenLayers.Util.extend(
                        {}, this.defaultHandlerOptions
                    );
                    OpenLayers.Control.prototype.initialize.apply(
                        this, arguments
                    ); 
                    this.handler = new OpenLayers.Handler.Click(
                        this, {
                            'click': this.trigger
                        }, this.handlerOptions
                    );
                }, 

                trigger: function(e) {
                    var lonlat = map.getLonLatFromPixel(e.xy);
                    alert("You clicked near " + lonlat.lat + " N, " +
                                              + lonlat.lon + " E");
                }

            });
			
			
    </script>
</head>
<body onload="init()">

	<div id="header">
		<table class="inside_div">
			<tr>
				<td>main</td>
				<td><a href="">records</a></td>
				<td>about us</td>
			</tr>
		</table>
	</div> 
	
	<div id="main_part">
    <?php include 'application/views/'.$content_view; ?>
	</div>
	
	<div id="footer"></div>
</body>
</html>