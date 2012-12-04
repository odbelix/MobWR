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
		<div id="wrapper-content-column-left">
			<!-- Session-->
			<div id="session-content" class="content-color">
				<h1>Datos alumnos</h1>
			</div>
		</div>
		<div id="wrapper-content-column-mid" >
			<div class="horizontal"><div  class="menu-vertical-right lgreen" id="pub-obrera" onclick="gotoEnterprise(this.id);"><div class="text">Publicar Oferta Práctica Obrera</div></div></div>
			<div class="horizontal margin-left-menu-horizontal"><div  class="menu-vertical-right lgreen" id="pub-pro" onclick="gotoEnterprise(this.id);"><div class="text">Publicar Oferta Práctica Profesional</div></div></div>
			<div id="content-mid" class="content-color">
				<?
				$i=0;
				for($i=1;$i < 20;$i++){
				?>
				<table class="table-content">
					<thead><tr><td>Texto titulo</td></tr></thead>
					<tbody><tr><td>Texto titulo Texto titulo Texto titulo Texto titulo</td></tr></tbody>
				</table>
				<?
				}
				?>
			</div>
		</div>
		<div id="wrapper-content-column-right">
			<div  class="menu-vertical-right lgreen" id="seleccionar" onclick="gotoEnterprise(this.id);"><div class="text">Seleccionar Postulante</div></div>
			<div  class="menu-vertical-right lgreen margin-top-menu-vertical" id="suspender" onclick="gotoEnterprise(this.id);"><div class="text">Suspender Práctica</div></div>
			<div  class="menu-vertical-right lgreen margin-top-menu-vertical" id="evaluar" onclick="gotoEnterprise(this.id);"><div class="text">Evaluar Alumno</div></div>
			<div  class="menu-vertical-right lgreen margin-top-menu-vertical" id="registrar" onclick="gotoEnterprise(this.id);"><div class="text">Registro de Alumnos</div></div>
		</div>
	</div>
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
