<?php

class DBmanager {
	
	const DB_HOST = "localhost";
	const DB_NAME = 'db_dic';
	const DB_USER = 'root';
	const DB_PASS = '1234567890';
	
	public function __construct(){

		$this->aConnection=mysql_connect(self::DB_HOST,self::DB_USER,self::DB_PASS);
		if (!$this->aConnection) {
			return mysql_error();
		}				
		mysql_select_db(self::DB_NAME,$this->aConnection);	
	}
	
	
	public function execute($sql) {

		$rows = array();
		$result = mysql_query($sql);
		$result_ex = $result;
		//$result == true when SQL as INSERT or UPDATE
		
		if ($result!==true) {
			while ($row = mysql_fetch_assoc($result)) {			
				$rows[] = $row;
			}
			mysql_free_result($result);
			$result_ex = $rows;			
		}
		else {
			echo mysql_error();
		}
		return $result_ex;		
	}
	
}
?>
