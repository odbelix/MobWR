<?php
include_once("lib/config.php");
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/practicas_general.css">
<link rel="stylesheet" type="text/css" href="css/practicas_colors.css">
<title>Practicas</title>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/surf.js" type="text/javascript"></script>
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
				<li id="1">Inicio</li>
				<li id="2">Tipos de prácticas</li>
				<li id="3">Red de colaboradores</li>
				<li id="4">Inscribete</li>
				<li id="5">Contacto</li>
			</ul>
		</div>
	</div>
	<div id="wrapper-content">
		<div id="wrapper-content-column-1">
			<?=GalleryChange()?>
			<!-- -->
			<div class="mini-column dialog-color">
				<div class="presentation">
					No se puede encontrar el servidor de www.google.cl porque se ha producido un error en la búsqueda de DNS. 		
				</div>
			</div>
			<div class="mini-column lgreen">
				<!-- Session start-->
				<div >
					<table></table>
				</div>
				<!-- End Session start-->
			</div>
		</div>
		<div id="wrapper-content-column-2" class="content-color">
			<div class="column-title dgreen"><div class="text">Pŕactica Profesional</div></div>
		</div>
	</div><!-- End Wrapper-content -->
	<div id="wrapper-footer" class="content-color">
		<h1>Noticias</h1>
			<ul>
				<li>Última noticia actualizada .... <span class="cursos ">leer más</span></li>
				<li>Última noticia actualizada .... leer más</li>
				<li>Última noticia actualizada .... leer más</li>
			</ul>
		<div class="all menu-color">Leer más</div>
	</div>
</div>
</body>
</html>
