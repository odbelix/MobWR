<?php
include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

if(isset($_POST['id'])) {
	//UPDATE
	$query = "UPDATE noticia SET titulo='".$_POST['titulo']."', cuerpo ='".$_POST['cuerpo']."', tipo = ".$_POST['tipo']." WHERE id =".$_POST['id'];
	$result = $db->execute($query);
	if ($result == true){
		echo "OK";
	}
	else {
		echo "ERROR:".mysql_error();
	}
}
else {
	//ADD	
	$query = "INSERT INTO noticia (titulo,cuerpo,tipo,fecha) VALUES ('".$_POST['titulo']."','".$_POST['cuerpo']."',".$_POST['tipo'].",NOW())";
	$result = $db->execute($query);
	if ($result == true){
		echo "OK";
	}
	else {
		echo "ERROR:".mysql_error();
	}
	
}
?>