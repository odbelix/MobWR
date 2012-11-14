<?php
include("../utils.php");
include("../config.php");
include("../dblib.php");

$db = new DBmanager();

?>
<form action="index.php" method="post">
	<textarea name="sql" rows="10" cols="40"></textarea>
	<input type="submit" value="Ejecutar">
</form>
<?
if (isset($_POST['sql'])){
	$sql = $_POST['sql'];
	
	
	$create = "/CREATE/";
	$drop = "/DROP/";
	$sql_check = strtoupper($sql);
	if(preg_match($create,$sql_check)){
		echo '<p>No se permite la sentencia CREATE</p>';
	}
	else {
		if (preg_match($drop,$sql_check)){
			echo '<p>No se permite la sentencia DROP</p>';	
		}
		else {
			$result_sql = $db->execute($sql);
			echo tableFromtable($result_sql,$sql,0,"");		
		}
	}
}
?>