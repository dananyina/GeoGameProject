<div id = "rec_view">
<?php 
	foreach ($data as $row){
		echo "&nbsp";
		echo $row["id"];
		echo "&nbsp";
		echo $row["name"];
		echo "&nbsp";
		echo $row["results"];
		echo "<br>";
	}
?>
</div>