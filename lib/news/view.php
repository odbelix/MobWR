<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");

$db = new DBmanager();

//Get type of user
$query = "SELECT * FROM noticia ORDER BY id DESC LIMIT 3";


$result = $db->execute($query);
echo '<h1>Noticias</h1>';
echo '<ul>';
foreach($result as $data){
	echo '<li>'.$data['titulo'].'...Ver más</li>';
}
echo '</ul>';
echo '<div class="all menu-color">Leer más</div>';
?>