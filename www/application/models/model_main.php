<?php
Class Model_Main extends Model
{
	public function get_data()
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
				
			// ����� 1 ������ ������
			$query = "SELECT * FROM ".DB_TABLE." ORDER BY RAND() LIMIT 1";
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

?>