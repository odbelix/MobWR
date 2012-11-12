<?php
include_once("config.php");

$db = new DBmanager();

/*Check if record exists, return count of where*/
function checkRecord($table=null,$where=null){
	if ($table != null && $where != null){
		$query = "SELECT COUNT(*) AS COUNT FROM ".$table." WHERE ".$where;
		global $db;
		$result = $db->execute($query);
		$count = $result[0];
		if($count['COUNT']!=0){
			return $count['COUNT'];
		}	
		else {
			return 0;
		}
	}	
	else {
		return 0;
	}
}
function getRecords($field="*",$table=null,$where=null){
	if ($table != null && $where != null){
		$query = "SELECT ".$field." FROM ".$table." WHERE ".$where;
		global $db;
		$result = $db->execute($query);
		return $result;
	}
	else {
		return 0; 
	}
}
function updateRecords($field="*",$table=null,$where=null){
	if ($table != null && $where != null){
		$query = "UPDATE ".$table." SET ".$field." WHERE ".$where;
		global $db;
		return $db->exceute($query);
	}
	else {
		return 0;
	}
}
?>