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
<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<title>Proyectos Existentes en los Municipios</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
function Confirmar(frm) {

var borrar = confirm("Estás seguro/a de que quiere eliminar estos registros?");

return borrar; //true o false 
}
//-->
</script>

<script>
		$(document).ready(function(){
			$('#IrArriba').hide();
			$(function(){
				$(window).scroll(function(){
					if($(this).scrollTop() > 200){
						$('#IrArriba').fadeIn();
					}else{
						$('#IrArriba').fadeOut();
					}
				})
				$('#IrArriba span').click(function(){
					$('body,html').animate({
						scrollTop: 0
					}, 1000);
					return false;
				})
			})
		})
	</script> 
<meta charset="utf-8">
</head>
<body>

<div id="IrArriba"><a href="javascript:void(0);"><span></span></a></div>
<?php
		require("conexion.php");
		$link=conectar();

		$sql="SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_cgec WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_planagua WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_envergadura WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_espeaten WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_gobernacion WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_inversion WHERE estatus =  'Sin Iniciar' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_ministerio WHERE estatus =  'Sin Iniciar'";

		$sql100="SELECT SUM(total) SumaTotal
                            FROM (SELECT COUNT(*) total FROM proyecto_inversion WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_cgec WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_planagua WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_espeaten WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_gobernacion WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_ministerio WHERE estatus = 'Sin Iniciar'
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_envergadura WHERE estatus = 'Sin Iniciar'
                            ) t1";


		$ok=mysql_query($sql,$link);

		$dandy=mysql_query($sql100,$link);
?>

<script type="text/javascript">
			function imprSelec(andres)
				{
					var ficha_proyecto_cgec=document.getElementById(andres);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha_proyecto_cgec.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
				}
		</script>

<?php
  echo"<table class='header' id='tabla1' height='10px' width='150px' align='right' border='1px'>
    <tr>
    <td>Numero Total de Proyectos: </td><td>".mysql_result($dandy, 0)."</td>
    </tr>
    </table>";
?>
<br>
<br>
<br>
<div id="listado">
<?php
	//Se deben insertar las tablas que se van a mostrar dentro de un ?php y se muestran con echo para que no exista
	//ningun problema de interfaz

	//La funcion de javascrip va afuera ya que existe algun conflicto con el echo o el php.
		echo "
			
				<table class='header' align='center' border='1px'>
				<h2 align='center'>Proyectos Sin Iniciar.</h2>
					<tr>
						<th scope='col'>Nro</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Ubicación</th>
					</tr>";
		
						while(($registro=mysql_fetch_assoc($ok))>0)
						{


					echo "<tr>
						<td align='center'>$registro[nro]</td>
						<td align='center'>$registro[codigo]</td>
						<td align='center' width='150px' height='80px'>$registro[nombre]</td>
						<td align='center'>$registro[municipio], $registro[parroquia]</td>

					</tr>";
				}
			echo "</table>
				";
		//El boton de imprimir debe ir fuera del metodo php ya que no funciona dentro del  mismo
	?>

	<br>
	<br>
<center><a href="../reportes/listado_total_sin_iniciar.php" target="_blank"><img src="../iconos/imprimir.png"></a></center>
</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>