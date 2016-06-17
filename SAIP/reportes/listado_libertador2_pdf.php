<?php
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
/*instanciamos un objeto de la clase html2pdf*/
$objPDF=new HTML2PDF("L","Letter","es",true,'UTF-8');

$tabla="<page>
		<img src='../imagenes/banner4.jpg' WIDTH=1020 HEIGHT=800/>
		<br>
		<br>
		<h3 align='center'>Municipio Libertador.</h3>
		<br>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:50px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:80px' scope='col'>Año de Aprobación</th>
						<th style='width:60px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:70px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql="select * from proyecto_espeaten where municipio like 'Libertador' order by nro asc;";
$ok=mysql_query($sql,$conexion);
while(($datos=mysql_fetch_assoc($ok))>0)
{
	$tabla.="<tr align='center'>
						<td>$datos[nro]</td>
						<td style='width:150px; height:100px'>$datos[ente]</td>
						<td>$datos[anio]</td>
						<td>$datos[codigo]</td>
						<td style='width:300px; height:100px;'>$datos[nombre]</td>
						<td>$datos[inspeccion]</td>
						<td>$datos[estatus]</td>
						
			</tr>";
}
$tabla.="</table>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";
/*ahora llamamos a la funcion writeHTml para escribir la variaable $tabla en un archivo con formato PDF*/
$objPDF->writeHTML($tabla);
/*el ultimo paso es generar el archivo especificamente el destino(ventana emrgente o dentro del navegador)*/
$objPDF->Output("Listado_Municipio_Libertador.pdf","D");
?>