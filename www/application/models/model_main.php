<?php
Class Model_Main extends Model
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
				echo "Подключение к базе ".DB_DATABASE." установлено!"; 
			}
			else 
				die ("Не могу подключиться к базе данных DB_DATABASE!");
				
			$query = "SELECT * FROM ".DB_TABLE;
			$res = mysql_query($query);
			
			$data = array();
			while($row = mysql_fetch_array($res))
			{
				$data[] = $row;
			}
			echo $data[0]["id"][0];
			
		mysql_close($dbconnect);
		return $data;
	}
}

?>