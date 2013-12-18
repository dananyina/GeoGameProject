<?php
Class Model_All extends Model
{
	public function get_data()
	{
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

		$query = "SELECT * FROM ".DB_TABLE;
		$res = mysql_query($query);
			
		$data = array();
		while($row = mysql_fetch_array($res))
		{
			$data[] = $row;
			//id, name, description, x, y, path_img
		}
			
		mysql_close($dbconnect);
		return $data;
	}
}