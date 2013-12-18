<?php
foreach ($data as $row){
	echo "<div>";
	echo $row["name"];
	echo "<br>";
	echo $row["description"];
	echo "<br>";
	echo "<img src=".$row["path_img"].">";
	echo "</div>";
}
