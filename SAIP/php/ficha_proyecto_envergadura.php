<?php
$codigo = $_GET['cod'];
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
$objPDF=new HTML2PDF("P","Letter","es",true,'UTF-8');
	
	$sql="select * from proyecto_envergadura where codigo ='$codigo'";
	$ok=mysql_query($sql,$conexion);
	$registro=mysql_fetch_assoc($ok);

$tabla="<page backtop='3mm' backbottom='3mm' backleft='3mm' backright='3mm'>
		<img src='../imagenes/banner4.jpg' WIDTH=700 HEIGHT=800/>
		<br>
		<h3 align='center'>Ficha del Proyecto</h3>
		<br>
		<fieldset>
		
          <b>DATOS DEL PROYECTO.</b>
     
		<table border='0.3px'>
		<tbody>
		<tr bgcolor='#C0504D'>
			<td colspan='10' style='text-align: center;'><label>Nombre de La Obra y Año de aprobación:</label><br/><br/>
			$registro[codigo], $registro[nombre], Aprobado en el $registro[anio]</td>
		</tr>


		<tr >
			<td style='text-align: center;'><label>Ubicación:</label><br/><br/>$registro[municipio], $registro[parroquia], $registro[sector].</td>
			<td style='text-align: center;'><label>Fecha de Inicio:</label><br/><br/>$registro[diai]/$registro[mesi]/$registro[anioi]</td>
			<td style='text-align: center;'><label>Fecha de Culminación:</label><br/><br/>$registro[diac]/$registro[mesc]/$registro[anioc]</td>
			<td style='text-align: center;'><label>Coordenadas:</label><br/><br/>Norte: $registro[coordnorte], Este: $registro[coordeste].</td>
			<td style='text-align: center;'><label>Existencia de la Valla:</label><br/><br/>$registro[valla].</td>
		</tr>
		<tr>
		<td colspan='10' style='text-align: center;'><label>Empresa Ejecutora:</label><br/><br/> $registro[empresa] Rif: $registro[rif], Ing. Resd.: $registro[ingenieror] C.I.V.: $registro[civr], Ing. Insp.: $registro[ingenieroi] C.I.V.: $registro[civi].</td>
		</tr>
		<tr>
			<td style='height: 50px; width: 150px; text-align: center;'><label>Descripción:</label><br/><br/>$registro[descripcion]</td>
			<td style='height: 50px; width: 150px; text-align: center;'><label>Ente Responsable</label><br/><br/>$registro[ente]</td>
			<td style='text-align: center;'><label>Beneficiados:</label><br/><br/>$registro[beneficiados] Personas.</td>
		</tr>

		<tr>
          <td><b>DATOS DE LA INSPECCION.</b></td>
         </tr>
		<tr>
			<td style='text-align: center;'><label>Inspección:</label><br/><br/>$registro[inspeccion]</td>
			<td style='text-align: center;'><label>Fecha de Inicio:</label><br/><br/>$registro[diains]/$registro[mesins]/$registro[anioins].</td>
			<td style='text-align: center;'><label>Avance Fisíco:</label><br/><br/>$registro[avance]%</td>
			<td style='text-align: center;' colspan='2'><label>Estatus:</label><br/><br/>$registro[estatus]. $registro[razon]</td>
		</tr>

		<tr>
			<td colspan='10' style='text-align: center;'><label>REDI - Inspector:</label><br/><br/>Nombre:$registro[inspector], Telefono: $registro[telefi] - $registro[telefonoi]</td>
		</tr>
		<tr>
		<td colspan='10' style='text-align: center;'><label>Trabajos:</label><br/><br/></td>
		</tr>
		<tr>
			<td style='height: 50px; text-align: center;'><label>Trabajos Ejecutados:</label><br/><br/>$registro[t_ejecutado]</td>
			<td style='height: 50px; text-align: center;' colspan='2'><label>Trabajos en Ejecución:</label><br/><br/>$registro[t_ejecucion]</td>
			<td style='height: 50px; text-align: center;' colspan='2'><label>Trabajos por Ejecutar:</label><br/><br/>$registro[t_ejecutar]</td>
		</tr>

		<tr>
          <td><b>DATOS DEL ENTREVISTADO.</b></td>
         </tr>
        <tr>
			<td colspan='10' style='text-align: center;'><label>Entrevistado:</label><br/><br/>Nombre: $registro[entrevistado], Telefono: $registro[telef] - $registro[telefono], Cargo Ocupado: $registro[cargo].</td>
		</tr>
		
		";
$tabla.="</tbody>";
$tabla.="</table>";
$tabla.="</fieldset>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";
$objPDF->writeHTML($tabla);
$objPDF->Output("Ficha del Proyecto.pdf","D");
?>