<?php
class Model_Getlatlng extends Model{
	function get_data(){
		$dbconnect = mysql_connect (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
		if (!$dbconnect)
		{
			echo mysql_error();
		}
		
		if(@mysql_select_db(DB_DATABASE))
		{
			//echo "Подключение к базе ".DB_DATABASE." установлено!";
		}
		else
			die ("Не могу подключиться к базе данных DB_DATABASE!");
		//RED ALERT!!!
		$query = "SELECT x, y FROM ".DB_TABLE." WHERE id=".$_POST["id"];
		$res = mysql_query($query);
			
		$data = array();
		while($row = mysql_fetch_array($res))
		{
			$data[] = $row;
			// x, y
		}
			
		mysql_close($dbconnect);
		return $data;
	}
}