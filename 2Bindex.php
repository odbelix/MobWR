<?php
include_once("lib/utils.php");
?>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/practicas.css">
<title>Practicas</title>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny_mce_src.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#menu-admin li").click(function(){
		if (this.id == "1"){
			$("#content").load('lib/news/edit.php');	
		}
		if (this.id == "2"){
			$("#content").load('lib/dfiles/edit_file.php');
		}
		
	});
});
</script>
</head>
<body>
<div id="wrapper" class="wrapper-color">
	<div id="wrapper-header">
		<div id="column">
			<div class="title">Escuela de Agronomía</div>
			<div class="sub-title">FACULTAD DE CIENCIAS AGRARIAS</div>
		</div>
		<img class="imagen1" src="images/utal.png" />
		<img class="imagen2" src="images/agronomia.png"/>
	</div>
	<div id="wrapper-menu" class="menu-color">
		<div id="horizontal-menu">
			<ul>
				<li>Inicio</li>
				<li>Tipos de prácticas</li>
				<li>Red de colaboradores</li>
				<li>Inscribete</li>
				<li>Contacto</li>
			</ul>
		</div>
	</div>
	<div class="wrapper-content">
		<div id="wrapper-content-column-left" class="content-color">
			<div class="menu-color"><div class="text">Menú</div></div>
			<ul id="menu-admin">
				<li id="1">Noticias</li>
				<li id="2">Reglamentos</li>
				<li id="3">Mensajes</li>					
			</ul>
			<div class="menu-color"><div class="text">Reportes</div></div>
			<ul id="menu-admin-reports">
				<li id="1" >Empresas</li>
				<li id="2" >Alumnos</li>
				<li id="3" >Practicas</li>					
			</ul>
		</div>
		<div id="content" class="wrapper-content-column-2b content-color">
		<?php 
		GalleryChange();
		?>
		</div>
		<br style="clear: both" />
	</div><!-- End Wrapper-content -->
</div>
</body>
</html>
