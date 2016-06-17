<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<?php
$codigo=$_GET['cod'];
require("conexion.php");
$conexion=conectar();

$sql="select * from auditoria_cgec where fk_codigo='$codigo'";
$sql1="select * from proyecto_cgec where codigo='$codigo'";
$ok=mysql_query($sql,$conexion);
$ok1=mysql_query($sql1,$conexion);

$cliente=mysql_fetch_assoc($ok1)


?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo_tablas.css">
<link rel="stylesheet" type="text/css" href="../css/fondo.css">
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
/* El metodo de auditoria me extrae los datos de la tabla de auditoria, en esta se respaldan varios datos despues de actualizar algun registro 
 mediante un triggers definido en la base de datos*/
	echo "
				<table class='header' align='center' border='1px'>
				<h3 align='center'>Inspecciones Previas del Proyecto.</h3>
					<tr>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
						<th scope='col'>Avance</th>
						<th scope='col'>Fecha de la Inspección</th>
                                                <th scope='col'>Imprimir Inspección</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok))>0)
						{


					echo "<tr>
						<td>$registro[fk_codigo]</td>
						<td width='150px' height='80px'>$registro[nombre]</td>
						<td>$registro[inspeccion]</a></td>
						<td>$registro[estatus]</td>
						<td>$registro[avance]%</td>
						<td>$registro[diains]/$registro[mesins]/$registro[anioins]</td>
                                                <td><a href='ficha_auditoria_cgec.php?num=$registro[inspeccion]&cod=$registro[fk_codigo]&nom=$registro[nombre]&dia=$registro[diains]&mes=$registro[mesins]&anio=$registro[anioins]' style='text-decoration:none; color:#E43F3F;'>Imprimir</a></td>

											</tr>";
				}
			echo "</table>";
?>

				<table class='header' align='center' border='1px'>
				<h3 align='center'>Inspección Actual del Proyecto.</h3>
					<tr>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
						<th scope='col'>Avance</th>
						<th scope='col'>Fecha de la Inspección</th>
					</tr>

					<tr>
						<td><?php echo $cliente['codigo'] ?></td>
						<td width='150px' height='80px'><?php echo $cliente['nombre'] ?></td>
						<td><?php echo $cliente['inspeccion'] ?></td>
						<td><?php echo $cliente['estatus'] ?></td>
						<td><?php echo $cliente['avance'] ?>%</td>
						<td><?php echo $cliente['diains'] ?>/<?php echo $cliente['mesins'] ?>/<?php echo $cliente['anioins'] ?></td>
						</tr>
					</table>
					<div align="center">
			<a href="javascript:history.back(1);"><input type="button" name="volver" value="Volver al Listado"></a>
		</div>

</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>