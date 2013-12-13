<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	<link rel="stylesheet" type="text/css" href="" />
	<script src="C:\WebServers\home\ultramap\www\.js" type="text/javascript"></script>
</head>
<body>

	<form>  
        <input id="btn1" type="button" value="Страница 1">   
    </form>
	
	<div id="content"></div> 
	
	<script>  
        $(document).ready(function(){  
          
            $('#btn1').click(function(){  
                $.ajax({  
                    url: "ultramap/",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                });  
            });  

    </script> 
	
    <?php include 'application/views/'.$content_view; ?>
</body>
</html>