<div id = "rec_view">
<?php 
	foreach ($data as $row){
		echo $row["id"];
		echo $row["name"];
		echo $row["results"];
	}
?>
</div>