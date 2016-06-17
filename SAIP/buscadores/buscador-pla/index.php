<?php
require_once('conexion/conexion.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Buscador y punto.</title>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class="container">
	<div class="center" id="logo">
		<img src="imagenes/banner4.jpg" width="800px" alt="REDILA" title="REDILA">
	</div>
			<div align="center">
			<a href="javascript:history.back(1);"><input type="button" name="volver" value="Volver al Mapa"></a>
			</div>
			<div class="form center">
			
			</div>
			<br>
		<div class="form center">
			<form action="" method="post" name="search_form" id="search_form">
				<input type="search" name="search" id="search">
			</form> 
		</div>
		<div id="resultados">
			
		</div>
		<div class="footer center">
			Copirigth© 2015 - Revervados todos los derechos.
		</div>
	</div>
</body>
</html>