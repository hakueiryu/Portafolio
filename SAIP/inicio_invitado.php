<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?><!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<tittle></tittle>
<link rel="stylesheet" href="menu_invitado/estilos.css">
<link rel="stylesheet" href="menu_invitado/fonts.css">
<link rel="stylesheet" href="menu_invitado/style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fuentes de Google -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Iconos -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<header>

	<div class="menu_bar">
	
		<li><a href="#" class="bt-menu"><span class="icon-menu"></span> Menu</a></li>
	
	</div>

	<nav class="zindex">

	<ul id="accordion" class="accordion">
	<li><a href="php/inicio.php" target="principal"><span class="icon-home"></span>Inicio</a></li>				
	<li><div class="link"><span class="icon-profile"></span>Proyectos de Inversion<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_inversion.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	</li>
	<li><div class="link"><span class="icon-folder"></span>Compromisos de   Gobierno de la Eficiencia en la Calle<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa6.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_cgec.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	<li><div class="link">Plan Nacional de Agua<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa1.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_planagua.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	<li><div class="link">Proyectos de Especial Atención<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa2.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_espeaten.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	<li><div class="link">Proyectos de Gobernación<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa3.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_gobernacion.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	<li><div class="link">Proyectos de Ministerios<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa4.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_ministerio.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>
	<li><div class="link">Proyectos de Envergadura<i class="fa fa-chevron-down"></i></div>
	<ul class="submenu">
	<li><a href="mapa_invitado/I_mapa5.php" target="principal"><span class="icon-file-picture"></span>Mapa</a></li>
	<li><a href="php/I_listado_proyecto_envergadura.php" target="_blank"><span class="icon-folder"></span>Listado Total</a></li>
	</ul>

	</ul>
	</nav>
</header>

<section class="separacion" >


<?php
	    if(isset($_SESSION['login'])) {
	?>
	      <div class="sesion"> Bienvenido: <strong><?=$_SESSION['login']?></strong>
	        <a href="index.php">Cerrar Sesión</a></div>
	<?php
	    }
	?>


<iframe name="principal" id="principal" height="1200px" width="100%" frameborder="0" scrolling="auto" src="php/inicio.php"></iframe>
	
</section>

<footer></footer>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="jquery.min.js"></script>
	<script src="menu_invitado/menu.js"></script>
	<script src="menu_invitado/main.js"></script>
</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>