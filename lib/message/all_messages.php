<?php

include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/utils.php");
header('Content-Type: text/html; charset=UTF-8');

$db = new DBmanager();

$result = $db->execute("SELECT id,nombre,descripcion FROM mensaje ORDER BY id");
echo createTable($result,"MENSAJES",$option=1,$class="","editMessage");
