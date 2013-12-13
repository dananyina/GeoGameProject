<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="../../css/main_css.css" />
	<script src="../../js/jquery.js" type="text/javascript"></script>
	<script src='http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjpkAC9ePGem0lIq5XcMiuhR_wWLPFku8Ix9i2SXYRVK3e45q1BQUd_beF8dtzKET_EteAjPdGDwqpQ'></script>
    <link rel="stylesheet" href="../../map/theme/default/style.css" type="text/css">
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