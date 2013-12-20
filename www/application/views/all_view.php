<div id = "all_view">
<?php
foreach ($data as $row){
	echo " \t &nbsp";
	echo "<div class = 'place_from_bd'>";
	echo " \t &nbsp";
	echo $row["name"];
	echo "<br>";
	echo "<div id=descr_".$row["id"]." class = 'dascription'>".$row['description']."</div>";
	echo "<br>";
	echo " \t &nbsp";
	echo "<img src=".$row["path_img"].">";
	echo " \t &nbsp";
	echo "</div>";
}
?>
</div>