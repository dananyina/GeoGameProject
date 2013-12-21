<div id = "all_view">
<?php
foreach ($data as $row){
	echo " \t &nbsp";
	echo "<div class = 'place_from_bd'>";
	echo " \t &nbsp";
	echo $row["name"];
	echo "<br>";
	
	echo "<br>";
	echo " \t &nbsp";
	echo "<img src=".$row["path_img"].">";
	echo "<div class = 'dascription'>".$row['description']."</div>";
	echo " \t &nbsp";
	echo "</div>";
}
?>
</div>