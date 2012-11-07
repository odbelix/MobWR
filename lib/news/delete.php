<?php

include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

if(isset($_POST['id'])) {
	$query = "DELETE FROM noticia WHERE id=".$_POST['id'];
	$result = $db->execute($query);
	if ($result == true){
		echo "OK";
	}
	else {
		echo "ERROR:".mysql_error();
	}	
}
else {
	echo "Error: No se especifico un ID de noticia";
}
?>
	