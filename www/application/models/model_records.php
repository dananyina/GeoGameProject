<?php
class Model_Records extends Model
{
	public  function  get_data()
	{
	//DB_HOSTNAME, DB_USERNAME, DB_PASSWORD ���������� � config.php
		$dbconnect = mysql_connect (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD); 
			if (!$dbconnect) 
			{ 
				echo mysql_error();
			}

			if(@mysql_select_db(DB_DATABASE)) 
			{ 
				//echo "����������� � ���� ".DB_DATABASE." �����������!"; 
			}
			else 
				die ("�� ���� ������������ � ���� ������ DB_DATABASE!");
				
			$query = "SELECT * FROM ".DB_TABLE_RECORDS." WHERE 1 ORDER BY results DESC LIMIT 10";
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
