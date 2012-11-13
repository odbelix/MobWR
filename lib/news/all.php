<?php
include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/utils.php");


$db = new DBmanager();
$query = "SELECT * FROM noticia ORDER BY id DESC";
$results = $db->execute($query);

echo tableFromtable($results,"noticia",1,'news');


?>