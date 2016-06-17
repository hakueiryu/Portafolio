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
<title>Proyectos Existentes en el Municipio Andres Bello</title>
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

		$sql="select login,nivel,estatus from usuario where nivel='I';";

		$ok=mysql_query($sql,$link);
	?>

	<?php
			echo "
			
				<table class='header' align='center' border='1px'>
				<h3 align='center'>Usuarios</h3>
					<tr>
						<th scope='col'>Nombre de Usuario</th>
						<th scope='col'>Nivel</th>
						<th scope='col'>Estatus</th>
						<th scope='col'>Eliminar</th>
					
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok))>0)
						{


					echo "<tr>
						<td align='center'>$registro[login]</td>
						<td align='center'>$registro[nivel]</td>
						<td align='center'>$registro[estatus]</td>
						<td><a href='eliminar_usuario.php?cod=$registro[login]' onClick='return Confirmar(this.form)'><img src='../iconos/eliminar.png' width='25' height='25'></a></td>

					</tr>";
				}
			echo "</table>
				";
		//El boton de imprimir debe ir fuera del metodo php ya que no funciona dentro del  mismo
	?>
		

</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>