<?php
include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

if(isset($_FILES['file'])){
	$uploaddir = $_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/dfiles/files/";
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

	echo '<pre>';
	echo $uploadfile;
	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    	//UPDATE DATABASE
    	$query = "UPDATE archivos SET ruta='".$uploadfile."' WHERE id=".$_POST['id'];
    	$db->execute($query);
		header("location: ".$_SERVER['HTTP_REFERER']);
	} else {
    	echo "¡Posible ataque de carga de archivos!\n";
	}
	echo '</pre>';
}
else {
	echo "No se define un archivo";
}
?>