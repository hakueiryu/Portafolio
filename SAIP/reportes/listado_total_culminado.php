<?php
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
/*instanciamos un objeto de la clase html2pdf*/
$objPDF=new HTML2PDF("P","Legal","es",true,'UTF-8');
$tabla="<page>
		<img src='../imagenes/banner4.jpg' WIDTH=750 HEIGHT=800/>
		<h3 align='center'>Proyectos Culminados.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th scope='col'>Nro</th>
						<th scope='col'>Codigo</th>
						<th scope='col'>Nombre del Proyecto</th>
						<th scope='col'>Ubicación</th>
					</tr>";
		 
$sql="SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_cgec WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_planagua WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_envergadura WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_espeaten WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_gobernacion WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_inversion WHERE estatus =  'Culminado' UNION ALL SELECT nro,codigo,nombre,municipio,parroquia,avance FROM proyecto_ministerio WHERE estatus =  'Culminado'";
$ok=mysql_query($sql,$conexion);
while(($datos=mysql_fetch_assoc($ok))>0)
{
	$tabla.="<tr align='center'>
						<td align='center'>$datos[nro]</td>
						<td align='center'>$datos[codigo]</td>
						<td align='center' style=' width:200px; height: 100px;'>$datos[nombre]</td>
						<td align='center'>$datos[municipio], $datos[parroquia]</td>

					</tr>";
				}
$tabla.="</table>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";

/*ahora llamamos a la funcion writeHTml para escribir la variaable $tabla en un archivo con formato PDF*/
$objPDF->writeHTML($tabla);

/*el ultimo paso es generar el archivo especificamente el destino(ventana emrgente o dentro del navegador)*/
$objPDF->Output("Listado_Total_de_Proyectos_Culminado.pdf","D");
?>