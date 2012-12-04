<?php
include_once("lib/utils.php");
include_once("lib/dblib.php");
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/practicas_general.css">
<link rel="stylesheet" type="text/css" href="css/practicas_colors.css">
<title>Practicas</title>
<script src="js/jquery-1.8.2.min.js"></script>
<script language="JavaScript">
$(document).ready(function(){
	$("#horizontal-menu li").click(function(){
		if(this.id == "1"){
			location.reload();
		}
		if(this.id == "2"){
			$("#wrapper-content").load("static/tipo.php");
		}
		if(this.id == "3"){
			$("#wrapper-content").load("static/colaboradores.php");
		}
		if(this.id == "4"){
			$("#wrapper-content").load("static/inscribete.php");
		}
		if(this.id == "5"){
			$("#wrapper-content").load("static/contacto.html");
		}
		$('#horizontal-menu li').each(function(index) {
   			 $(this).attr('class','');			 
		});
		$(this).attr('class','');
		$(this).addClass('selected'); 
	});
});
function navegar(id){
	var menu = $("#"+id);
	if (menu.hasClass('lgreen')){
		menu.removeClass('lgreen');
		menu.addClass('selected');	
	}
	else {
		menu.removeClass('selected');
		menu.addClass('lgreen');	
	}
	if(menu.attr('id') == 'title-one'){
		$("#title-two").removeClass('selected');
		$("#title-two").addClass('lgreen');
	}
	else {
		$("#title-one").removeClass('selected');
		$("#title-one").addClass('lgreen');
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
