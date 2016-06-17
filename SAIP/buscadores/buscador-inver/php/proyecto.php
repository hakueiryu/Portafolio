<?php require_once('../conexion/conexion.php') ?>
<?php 
	$search = '';
	if (isset($_GET['search'])){
		$search = strtolower($_GET['search']);
	}

	$id = '';
	if (isset($_GET['codigo'])){
		$id = $_GET['codigo'];
	}

	$consulta = "SELECT * FROM proyecto_inversion WHERE codigo LIKE '%".$id."%'";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX Y jQuery</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/ajax.js"></script>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<img src="../imagenes/banner4.jpg" width="800px" title="Region Estrategica de Desarrollo Integral de Los Andes" />
		</div>

		<div align="center">
			<a href="javascript:history.back(1);"><input type="button" name="volver" value="Volver a Buscar"></a>
		</div>
		<div class="form center">
			
		</div>
		<br>
		<div id="resultados">
		<h3 align="center">Datos del Proyecto</h3>
<table align="center" style="border:1px black solid; border-radius:5px; min-width:150px; text-align: center;">
					<tr>
						<td style="background: #87CEEB;">Nro</td>
						<td  width='80px' height='40px' style="text-align: center; background: #87CEEB;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['nro'])) ?></td>
					</tr>
					<tr>
						<td style="background: #ADD8E6;">Codigo</td>
						<td  width='80px' height='40px' style="text-align: center; background: #ADD8E6;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['codigo'])) ?></td>
					</tr>
					<tr>
						<td style="background: #87CEEB;">Entidad</td>
						<td  width='80px' height='40px' style="text-align: center; background: #87CEEB;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', $fila['ente']) ?></td>
					</tr>
					<tr>
						<td style="background: #ADD8E6;">Año de Aprobación</td>
						<td  width='80px' height='40px' style="text-align: center; background: #ADD8E6;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', $fila['anio']) ?></td>
					</tr>
					<tr>
						<td style="background: #87CEEB;">Nombre del Proyecto</td>
						<td width='150px' height='80px' style="text-align: center; background: #87CEEB;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', $fila['nombre']) ?></td>
					</tr>
					<tr>
						<td style="background: #ADD8E6;">Inspección Nº</td>
						<td  width='80px' height='40px' style="text-align: center; background: #ADD8E6;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['inspeccion'])) ?></td>
					</tr>
					<tr>
						<td style="background: #87CEEB;">Estatus</td>
						<td  width='80px' height='40px' style="text-align: center; background: #87CEEB;"><?php echo str_replace($search, '<strong>'.$search.'</strong>', $fila['estatus']) ?></td>
					</tr>
			</table>
			
		</div>
		<div class="footer center">
			<a href="../../../php/ficha_proyecto_inversion.php?cod=<?php echo $fila['codigo'] ?>&search=<?php echo $search ?>"><input type="button" name="ficha" value="Ficha del Proyecto"></a>
		</div>
	</div>
</body>
</html>