<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/fondo.css"/>
<link rel="stylesheet" type="text/css" href="../css/estilo_tablas.css">
	<title>Proyectos Existenten en el Municipio Antonio Rómulo Costa.</title>
<script language="JavaScript" type="text/javascript">
<!--
function Confirmar(frm) {

var borrar = confirm("Estás seguro/a de que quiere eliminar estos registros?");

return borrar; //true o false 
}
//-->
</script> 
<meta charset="utf-8">
</head>
<body>
	<?php
		require("conexion.php");
		$link=conectar();

		$sql1="select * from proyecto_ministerio where municipio like 'Antonio Rómulo Costa' order by nro asc;";

		$ok1=mysql_query($sql1,$link);
	?>

	<?php
			echo "
			
				<table class='header' align='center' border='1px'>
				<h3 align='center'>Municipio Antonio Rómulo Costa</h3>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Entidad</th>
						<th scope='col'>Año de Aprobación</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Inspección Nº</th>
						<th scope='col'>Estatus</th>
						
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok1))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'><a href='../php/ficha_proyecto_ministerio.php?cod=$registro[codigo]' style='text-decoration:none; color:#E43F3F;'>$registro[codigo]</a></td>
						<td align='center'>$registro[ente]</td>
						<td align='center'>$registro[anio]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[inspeccion]</td>
						<td align='center'>$registro[estatus]</td>
						

					</tr>";
				}
			echo "</table>
				";
		//El boton de imprimir debe ir fuera del metodo php ya que no funciona dentro del  mismo
	?>
		<center><a href="../reportes/listado_antonio4_pdf.php" target="_blank"><input name="imprimir" type="button" value="Generar PDF"/></a></center>
</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>