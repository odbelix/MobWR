<?php

include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

$query = 'UPDATE mensaje SET descripcion = "'.$_POST['descripcion'].'" WHERE id='.$_POST['id'];
$result = $db->execute($query);

if ($result == TRUE){
	echo "OK";
}
else {
	echo "Problem";
}
?>