<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
$db = new DBmanager();

$query = "SELECT id,nombre,descripcion FROM mensaje WHERE id=".$_POST['id'];
$result = $db->execute($query);

$datas;
foreach ($result as $mensaje) {
			$datas[] = array('id' => $mensaje['id'],
				'nombre' => $mensaje['nombre'],
				'descripcion' => $mensaje['descripcion']
			);
}
echo(json_encode($datas));
?>