<?php
include("lib/config.php");
include("lib/utils.php");

$db = new DBmanager();

$jquery = "../../js/jquery-1.8.2.min.js"; 
$jmultifile = "../../js/jquery.MultiFile.js";
?>
<script type="text/javascript" src="<?=$jquery?>"></script>
<script type="text/javascript" src="<?=$jmultifile?>"></script>
<?
if ( isset($_POST['id']) && isset($_POST['nombre']) ){
	?>
	<div>
	<h1>Actualizando archivo:<?=$_POST['nombre']?></h1>
	<form id="file_upload" action="update_file.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="300000000">
		<input type="hidden" name="id" value="<?=$_POST['id']?>">
 		<input type="file" id="file" name="file" class="multi" maxlength="1">
 		<input type="submit" value="Guardar">
	</form>
	</div>
	<?	
} 
?>

<div>
<h1>Actualizar Archivos</h1>
<?
	$result = $db->execute("SELECT id,nombre,ruta FROM archivos ORDER BY ID");
	foreach ($result as $archivo) {
		echo '<form action="edit_file.php" method="post">';
		echo '<input type="hidden" name="id" value="'.$archivo['id'].'">';
		echo '<input type="hidden" name="nombre" value="'.$archivo['nombre'].'">';
		echo '<a href="'.$archivo['ruta'].'" title="Ver archivo">'.$archivo['nombre'].'</a><input type="submit" value="Actualizar">';
		echo '</form>';
	}
?>
</div>