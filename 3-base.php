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
			<div class="horizontal"><div  class="menu-vertical-right lgreen" id="lista-obrera" onclick="gotoStudent(this.id);"><div class="text-2">Lista Prácticas <br>Obreras</div></div></div>
			<div class="horizontal margin-left-menu-horizontal"><div  class="menu-vertical-right lgreen" id="lista-pro" onclick="gotoStudent(this.id);"><div class="text-2">Lista Prácticas <br>Profesionales</div></div></div>
			<div id="content-mid" class="content-color">
				<h1 id="title"></h1>
				<table class="table-content">
					<thead><tr><td>Texto titulo</td></tr></thead>
					<tbody><tr><td>Texto titulo Texto titulo Texto titulo Texto titulo</td></tr></tbody>
				</table>
			</div>
		</div>
		<div id="wrapper-content-column-right">
			<div  class="menu-vertical-right lgreen" id="auto" onclick="gotoStudent(this.id);"><div class="text">Autoevaluación</div></div>
			<div  class="menu-vertical-right lgreen margin-top-menu-vertical" id="inscribir" onclick="gotoStudent(this.id);"><div class="text">Inscribir práctica</div></div>
			<div  class="info-practice content-color margin-top-menu-vertical"><div class="text">Inscribir práctica</div></div>
			<div  class="menu-vertical-right lgreen margin-top-menu-vertical" id="postular" onclick="gotoStudent(this.id);"><div class="text">Postular práctica</div></div>
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
