<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

$query = "SELECT * FROM noticia WHERE id=".$_POST['id'];
$result = $db->execute($query);

$datas;
foreach ($result as $news) {
			$datas[] = array('id' => $news['id'],
				'titulo' => $news['titulo'],
				'cuerpo' => $news['cuerpo'],
				'tipo' => $news['tipo'],
				'fecha' => $news['fecha']
			);
	
}
echo(json_encode($datas));
?>