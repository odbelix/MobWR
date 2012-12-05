<?php
include_once("lib/config.php");
?>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/practicas_general.css">
<link rel="stylesheet" type="text/css" href="css/practicas_colors.css">
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
	
	var list_menu = ['menu-admin','menu-admin-practice','menu-admin-records','menu-admin-reports'];
	$.each(list_menu,function(index, value){
		$("#"+value).hide();	
	});
});
function viewhide(id){
	var list = $("#"+id);
	if (list.is(':visible')){
		list.slideUp();	
	}
	else {
		list.slideDown();
	}
}
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
			<div class="menu-vertical-right-admin lgreen" onclick="viewhide('menu-admin')"><div class="text">Administración</div></div>
			<ul id="menu-admin">
				<li id="1">Noticias</li>
				<li id="2">Reglamentos</li>
				<li id="3">Mensajes</li>					
			</ul>
			<br>
			<div class="menu-vertical-right-admin lgreen" onclick="viewhide('menu-admin-practice')"><div class="text">Gestión prácticas</div></div>
			<ul id="menu-admin-practice">
				<li id="1" >Ver prácticas</li>
				<li id="2" >Notificación proceso evaluación</li>
				<li id="3" >Evaluación Final</li>					
			</ul>
			<br>
			<div class="menu-vertical-right-admin lgreen" onclick="viewhide('menu-admin-records')"><div class="text">Registros</div></div>
			<ul id="menu-admin-records">
				<li id="1" >Alumnos</li>
				<li id="2" >Empresas</li>
				<li id="3" >Practicas</li>					
			</ul>
			<br>
			<div class="menu-vertical-right-admin lgreen" onclick="viewhide('menu-admin-reports')"><div class="text">Reportes</div></div>
			<ul id="menu-admin-reports">
				<li id="1" >Empresas</li>
				<li id="2" >Alumnos</li>
				<li id="3" >Practicas</li>					
			</ul>
		</div>
		<div id="content" class="wrapper-content-column-2b content-color">
		<?php 
		echo GalleryChange();
		?>
		</div>
		<br style="clear: both" />
	</div><!-- End Wrapper-content -->
</div>
</body>
</html>
