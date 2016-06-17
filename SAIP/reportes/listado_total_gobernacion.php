<?php
require("conexion.php");
require("../html2pdf_v4.01/html2pdf.class.php");
$conexion=conectar();
/*instanciamos un objeto de la clase html2pdf*/
$objPDF=new HTML2PDF("L","Letter","es",true,'UTF-8');
$tabla="<page>
		<img src='../imagenes/banner4.jpg' WIDTH=750 HEIGHT=800/>
		<h3 align='center'>Municipio Andrés Bello.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql="select * from proyecto_gobernacion where municipio like 'Andrés Bello' order by nro asc;";
$ok=mysql_query($sql,$conexion);
while(($datos=mysql_fetch_assoc($ok))>0)
{
	$tabla.="<tr align='center'>
						<td style='width:100px; height:80px'>$datos[nro]</td>
						<td>$datos[ente]</td>
						<td>$datos[anio]</td>
						<td>$datos[codigo]</td>
						<td style='width:100px; height:80px'>$datos[nombre]</td>
						<td>$datos[inspeccion]</td>
						<td>$datos[estatus]</td>
					</tr>";
				}
$tabla.="</table>";
$tabla.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla.="</page>";

/* Antonio Romulo Costa*/
$tabla1="<page backtop='5'>
		<h3 align='center'>Municipio Antonio Rómulo Costa.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql1="select * from proyecto_gobernacion where municipio like 'Antonio Rómulo Costa' order by nro asc;";
$ok1=mysql_query($sql1,$conexion);
while(($datos1=mysql_fetch_assoc($ok1))>0)
{
	$tabla1.="<tr align='center'>
						<td>$datos1[nro]</td>
						<td style='width:100px; height:80px'>$datos1[ente]</td>
						<td>$datos1[anio]</td>
						<td>$datos1[codigo]</td>
						<td style='width:100px; height:80px'>$datos1[nombre]</td>
						<td>$datos1[inspeccion]</td>
						<td>$datos1[estatus]</td>
					</tr>";
				}
$tabla1.="</table>";
$tabla1.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla1.="</page>";

/* AYACUCHO */
$tabla2="<page backtop='5'>
		<h3 align='center'>Municipio Ayacucho.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql2="select * from proyecto_gobernacion where municipio like 'Ayacucho' order by nro asc;";
$ok2=mysql_query($sql2,$conexion);
while(($datos2=mysql_fetch_assoc($ok2))>0)
{
	$tabla2.="<tr align='center'>
						<td>$datos2[nro]</td>
						<td style='width:100px; height:80px'>$datos2[ente]</td>
						<td>$datos2[anio]</td>
						<td>$datos2[codigo]</td>
						<td style='width:100px; height:80px'>$datos2[nombre]</td>
						<td>$datos2[inspeccion]</td>
						<td>$datos2[estatus]</td>
					</tr>";
				}
$tabla2.="</table>";
$tabla2.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla2.="</page>";

/* BOLIVAR */
$tabla3="<page backtop='5'>
		<h3 align='center'>Municipio Bolívar.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql3="select * from proyecto_gobernacion where municipio like 'Bolívar' order by nro asc;";
$ok3=mysql_query($sql3,$conexion);
while(($datos3=mysql_fetch_assoc($ok3))>0)
{
	$tabla3.="<tr align='center'>
						<td>$datos3[nro]</td>
						<td style='width:100px; height:80px'>$datos3[ente]</td>
						<td>$datos3[anio]</td>
						<td>$datos3[codigo]</td>
						<td style='width:100px; height:80px'>$datos3[nombre]</td>
						<td>$datos3[inspeccion]</td>
						<td>$datos3[estatus]</td>
					</tr>";
				}
$tabla3.="</table>";
$tabla3.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla3.="</page>";

/* CAPACHO NUEVO */
$tabla4="<page backtop='5'>
		<h3 align='center'>Municipio Capacho Nuevo.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql4="select * from proyecto_gobernacion where municipio like 'Capacho Nuevo' order by nro asc;";
$ok4=mysql_query($sql4,$conexion);
while(($datos4=mysql_fetch_assoc($ok4))>0)
{
	$tabla4.="<tr align='center'>
						<td>$datos4[nro]</td>
						<td style='width:100px; height:80px'>$datos4[ente]</td>
						<td>$datos4[anio]</td>
						<td>$datos4[codigo]</td>
						<td style='width:100px; height:80px'>$datos4[nombre]</td>
						<td>$datos4[inspeccion]</td>
						<td>$datos4[estatus]</td>
					</tr>";
				}
$tabla4.="</table>";
$tabla4.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla4.="</page>";

/* CAPACHO VIEJO */
$tabla5="<page backtop='5'>
		<h3 align='center'>Municipio Capacho Viejo.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql5="select * from proyecto_gobernacion where municipio like 'Capacho Viejo' order by nro asc;";
$ok5=mysql_query($sql5,$conexion);
while(($datos5=mysql_fetch_assoc($ok5))>0)
{
	$tabla5.="<tr align='center'>
						<td>$datos5[nro]</td>
						<td style='width:100px; height:80px'>$datos5[ente]</td>
						<td>$datos5[anio]</td>
						<td>$datos5[codigo]</td>
						<td style='width:100px; height:80px'>$datos5[nombre]</td>
						<td>$datos5[inspeccion]</td>
						<td>$datos5[estatus]</td>
					</tr>";
				}
$tabla5.="</table>";
$tabla5.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla5.="</page>";

/* CARDENAS */
$tabla6="<page backtop='5'>
		<h3 align='center'>Municipio Cárdenas.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql6="select * from proyecto_gobernacion where municipio like 'Cárdenas' order by nro asc;";
$ok6=mysql_query($sql6,$conexion);
while(($datos6=mysql_fetch_assoc($ok6))>0)
{
	$tabla6.="<tr align='center'>
						<td>$datos6[nro]</td>
						<td style='width:100px; height:80px'>$datos6[ente]</td>
						<td>$datos6[anio]</td>
						<td>$datos6[codigo]</td>
						<td style='width:100px; height:80px'>$datos6[nombre]</td>
						<td>$datos6[inspeccion]</td>
						<td>$datos6[estatus]</td>
					</tr>";
				}
$tabla6.="</table>";
$tabla6.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla6.="</page>";

/* CORDOBA */
$tabla7="<page backtop='5'>
		<h3 align='center'>Municipio Córdoba.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql7="select * from proyecto_gobernacion where municipio like 'Córdoba' order by nro asc;";
$ok7=mysql_query($sql7,$conexion);
while(($datos7=mysql_fetch_assoc($ok7))>0)
{
	$tabla7.="<tr align='center'>
						<td>$datos7[nro]</td>
						<td style='width:100px; height:80px'>$datos7[ente]</td>
						<td>$datos7[anio]</td>
						<td>$datos7[codigo]</td>
						<td style='width:100px; height:80px'>$datos7[nombre]</td>
						<td>$datos7[inspeccion]</td>
						<td>$datos7[estatus]</td>
					</tr>";
				}
$tabla7.="</table>";
$tabla7.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla7.="</page>";

/* FERNADEZ FEO */
$tabla8="<page backtop='5'>
		<h3 align='center'>Municipio Fernández Feo.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql8="select * from proyecto_gobernacion where municipio like 'Fernández Feo' order by nro asc;";
$ok8=mysql_query($sql8,$conexion);
while(($datos8=mysql_fetch_assoc($ok8))>0)
{
	$tabla8.="<tr align='center'>
						<td>$datos8[nro]</td>
						<td style='width:100px; height:80px'>$datos8[ente]</td>
						<td>$datos8[anio]</td>
						<td>$datos8[codigo]</td>
						<td style='width:100px; height:80px'>$datos8[nombre]</td>
						<td>$datos8[inspeccion]</td>
						<td>$datos8[estatus]</td>
					</tr>";
				}
$tabla8.="</table>";
$tabla8.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla8.="</page>";

/* FRANCISCO DE MIRANDA */
$tabla9="<page backtop='5'>
		<h3 align='center'>Municipio Francisco de Miranda.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql9="select * from proyecto_gobernacion where municipio like 'Francisco de Miranda' order by nro asc;";
$ok9=mysql_query($sql9,$conexion);
while(($datos9=mysql_fetch_assoc($ok9))>0)
{
	$tabla9.="<tr align='center'>
						<td>$datos9[nro]</td>
						<td style='width:100px; height:80px'>$datos9[ente]</td>
						<td>$datos9[anio]</td>
						<td>$datos9[codigo]</td>
						<td style='width:100px; height:80px'>$datos9[nombre]</td>
						<td>$datos9[inspeccion]</td>
						<td>$datos9[estatus]</td>
					</tr>";
				}
$tabla9.="</table>";
$tabla9.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla9.="</page>";

/* GARCIA DE HEVIA */
$tabla10="<page backtop='5'>
		<h3 align='center'>Municipio García de Hevia.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql10="select * from proyecto_gobernacion where municipio like 'García de Hevia' order by nro asc;";
$ok10=mysql_query($sql10,$conexion);
while(($datos10=mysql_fetch_assoc($ok10))>0)
{
	$tabla10.="<tr align='center'>
						<td>$datos10[nro]</td>
						<td style='width:100px; height:80px'>$datos10[ente]</td>
						<td>$datos10[anio]</td>
						<td>$datos10[codigo]</td>
						<td style='width:100px; height:80px'>$datos10[nombre]</td>
						<td>$datos10[inspeccion]</td>
						<td>$datos10[estatus]</td>
					</tr>";
				}
$tabla10.="</table>";
$tabla10.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla10.="</page>";

/* Guásimos */
$tabla11="<page backtop='5'>
		<h3 align='center'>Municipio Guásimos.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql11="select * from proyecto_gobernacion where municipio like 'Guásimos' order by nro asc;";
$ok11=mysql_query($sql11,$conexion);
while(($datos11=mysql_fetch_assoc($ok11))>0)
{
	$tabla11.="<tr align='center'>
						<td>$datos11[nro]</td>
						<td style='width:100px; height:80px'>$datos11[ente]</td>
						<td>$datos11[anio]</td>
						<td>$datos11[codigo]</td>
						<td style='width:100px; height:80px'>$datos11[nombre]</td>
						<td>$datos11[inspeccion]</td>
						<td>$datos11[estatus]</td>
					</tr>";
				}
$tabla11.="</table>";
$tabla11.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla11.="</page>";

/* Jáuregui */
$tabla12="<page backtop='5'>
		<h3 align='center'>Municipio Jáuregui.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql12="select * from proyecto_gobernacion where municipio like 'Jáuregui' order by nro asc;";
$ok12=mysql_query($sql12,$conexion);
while(($datos12=mysql_fetch_assoc($ok12))>0)
{
	$tabla12.="<tr align='center'>
						<td>$datos12[nro]</td>
						<td style='width:100px; height:80px'>$datos12[ente]</td>
						<td>$datos12[anio]</td>
						<td>$datos12[codigo]</td>
						<td style='width:100px; height:80px'>$datos12[nombre]</td>
						<td>$datos12[inspeccion]</td>
						<td>$datos12[estatus]</td>
					</tr>";
				}
$tabla12.="</table>";
$tabla12.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla12.="</page>";

/* José María Vargas */
$tabla13="<page backtop='5'>
		<h3 align='center'>Municipio José María Vargas.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql13="select * from proyecto_gobernacion where municipio like 'José María Vargas' order by nro asc;";
$ok13=mysql_query($sql13,$conexion);
while(($datos13=mysql_fetch_assoc($ok13))>0)
{
	$tabla13.="<tr align='center'>
						<td>$datos13[nro]</td>
						<td style='width:100px; height:80px'>$datos13[ente]</td>
						<td>$datos13[anio]</td>
						<td>$datos13[codigo]</td>
						<td style='width:100px; height:80px'>$datos13[nombre]</td>
						<td>$datos13[inspeccion]</td>
						<td>$datos13[estatus]</td>
					</tr>";
				}
$tabla13.="</table>";
$tabla13.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla13.="</page>";

/* Junín */
$tabla14="<page backtop='5'>
		<h3 align='center'>Municipio Junín.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql14="select * from proyecto_gobernacion where municipio like 'Junín' order by nro asc;";
$ok14=mysql_query($sql14,$conexion);
while(($datos14=mysql_fetch_assoc($ok14))>0)
{
	$tabla14.="<tr align='center'>
						<td>$datos14[nro]</td>
						<td style='width:100px; height:80px'>$datos14[ente]</td>
						<td>$datos14[anio]</td>
						<td>$datos14[codigo]</td>
						<td style='width:100px; height:80px'>$datos14[nombre]</td>
						<td>$datos14[inspeccion]</td>
						<td>$datos14[estatus]</td>
					</tr>";
				}
$tabla14.="</table>";
$tabla14.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla14.="</page>";

/* Libertador */
$tabla15="<page backtop='5'>
		<h3 align='center'>Municipio Libertador.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql15="select * from proyecto_gobernacion where municipio like 'Libertador' order by nro asc;";
$ok15=mysql_query($sql15,$conexion);
while(($datos15=mysql_fetch_assoc($ok15))>0)
{
	$tabla15.="<tr align='center'>
						<td>$datos15[nro]</td>
						<td style='width:100px; height:80px'>$datos15[ente]</td>
						<td>$datos15[anio]</td>
						<td>$datos15[codigo]</td>
						<td style='width:100px; height:80px'>$datos15[nombre]</td>
						<td>$datos15[inspeccion]</td>
						<td>$datos15[estatus]</td>
					</tr>";
				}
$tabla15.="</table>";
$tabla15.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla15.="</page>";

/* Lobatera */
$tabla16="<page backtop='5'>
		<h3 align='center'>Municipio Lobatera.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql16="select * from proyecto_gobernacion where municipio like 'Lobatera' order by nro asc;";
$ok16=mysql_query($sql16,$conexion);
while(($datos16=mysql_fetch_assoc($ok16))>0)
{
	$tabla16.="<tr align='center'>
						<td>$datos16[nro]</td>
						<td style='width:100px; height:80px'>$datos16[ente]</td>
						<td>$datos16[anio]</td>
						<td>$datos16[codigo]</td>
						<td style='width:100px; height:80px'>$datos16[nombre]</td>
						<td>$datos16[inspeccion]</td>
						<td>$datos16[estatus]</td>
					</tr>";
				}
$tabla16.="</table>";
$tabla16.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla16.="</page>";

/* Michelena */
$tabla17="<page backtop='5'>
		<h3 align='center'>Municipio Michelena.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql17="select * from proyecto_gobernacion where municipio like 'Michelena' order by nro asc;";
$ok17=mysql_query($sql17,$conexion);
while(($datos17=mysql_fetch_assoc($ok17))>0)
{
	$tabla17.="<tr align='center'>
						<td>$datos17[nro]</td>
						<td style='width:100px; height:80px'>$datos17[ente]</td>
						<td>$datos17[anio]</td>
						<td>$datos17[codigo]</td>
						<td style='width:100px; height:80px'>$datos17[nombre]</td>
						<td>$datos17[inspeccion]</td>
						<td>$datos17[estatus]</td>
					</tr>";
				}
$tabla17.="</table>";
$tabla17.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla17.="</page>";

/* Panamericano */
$tabla18="<page backtop='5'>
		<h3 align='center'>Municipio Panamericano.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql18="select * from proyecto_gobernacion where municipio like 'Panamericano' order by nro asc;";
$ok18=mysql_query($sql18,$conexion);
while(($datos18=mysql_fetch_assoc($ok18))>0)
{
	$tabla18.="<tr align='center'>
						<td>$datos18[nro]</td>
						<td style='width:100px; height:80px'>$datos18[ente]</td>
						<td>$datos18[anio]</td>
						<td>$datos18[codigo]</td>
						<td style='width:100px; height:80px'>$datos18[nombre]</td>
						<td>$datos18[inspeccion]</td>
						<td>$datos18[estatus]</td>
					</tr>";
				}
$tabla18.="</table>";
$tabla18.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla18.="</page>";

/* Pedro María Ureña */
$tabla19="<page backtop='5'>
		<h3 align='center'>Municipio Pedro María Ureña.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql19="select * from proyecto_gobernacion where municipio like 'Pedro María Ureña' order by nro asc;";
$ok19=mysql_query($sql19,$conexion);
while(($datos19=mysql_fetch_assoc($ok19))>0)
{
	$tabla19.="<tr align='center'>
						<td>$datos19[nro]</td>
						<td style='width:100px; height:80px'>$datos19[ente]</td>
						<td>$datos19[anio]</td>
						<td>$datos19[codigo]</td>
						<td style='width:100px; height:80px'>$datos19[nombre]</td>
						<td>$datos19[inspeccion]</td>
						<td>$datos19[estatus]</td>
					</tr>";
				}
$tabla19.="</table>";
$tabla19.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla19.="</page>";

/* Rafael Urdaneta */
$tabla20="<page backtop='5'>
		<h3 align='center'>Municipio Rafael Urdaneta.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql20="select * from proyecto_gobernacion where municipio like 'Rafael Urdaneta' order by nro asc;";
$ok20=mysql_query($sql20,$conexion);
while(($datos20=mysql_fetch_assoc($ok20))>0)
{
	$tabla20.="<tr align='center'>
						<td>$datos20[nro]</td>
						<td style='width:100px; height:80px'>$datos20[ente]</td>
						<td>$datos20[anio]</td>
						<td>$datos20[codigo]</td>
						<td style='width:100px; height:80px'>$datos20[nombre]</td>
						<td>$datos20[inspeccion]</td>
						<td>$datos20[estatus]</td>
					</tr>";
				}
$tabla20.="</table>";
$tabla20.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla20.="</page>";

/* Samuel Darío Maldonado */
$tabla21="<page backtop='5'>
		<h3 align='center'>Municipio Samuel Darío Maldonado.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql21="select * from proyecto_gobernacion where municipio like 'Samuel Darío Maldonado' order by nro asc;";
$ok21=mysql_query($sql21,$conexion);
while(($datos21=mysql_fetch_assoc($ok21))>0)
{
	$tabla21.="<tr align='center'>
						<td>$datos21[nro]</td>
						<td style='width:100px; height:80px'>$datos21[ente]</td>
						<td>$datos21[anio]</td>
						<td>$datos21[codigo]</td>
						<td style='width:100px; height:80px'>$datos21[nombre]</td>
						<td>$datos21[inspeccion]</td>
						<td>$datos21[estatus]</td>
					</tr>";
				}
$tabla21.="</table>";
$tabla21.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla21.="</page>";

/* San Cristóbal */
$tabla22="<page backtop='5'>
		<h3 align='center'>Municipio San Cristóbal.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql22="select * from proyecto_gobernacion where municipio like 'San Cristóbal' order by nro asc;";
$ok22=mysql_query($sql22,$conexion);
while(($datos22=mysql_fetch_assoc($ok22))>0)
{
	$tabla22.="<tr align='center'>
						<td>$datos22[nro]</td>
						<td style='width:100px; height:80px'>$datos22[ente]</td>
						<td>$datos22[anio]</td>
						<td>$datos22[codigo]</td>
						<td style='width:100px; height:80px'>$datos22[nombre]</td>
						<td>$datos22[inspeccion]</td>
						<td>$datos22[estatus]</td>
					</tr>";
				}
$tabla22.="</table>";
$tabla22.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla22.="</page>";

/* San Judas Tadeo */
$tabla23="<page backtop='5'>
		<h3 align='center'>Municipio San Judas Tadeo.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql23="select * from proyecto_gobernacion where municipio like 'San Judas Tadeo' order by nro asc;";
$ok23=mysql_query($sql23,$conexion);
while(($datos23=mysql_fetch_assoc($ok23))>0)
{
	$tabla23.="<tr align='center'>
						<td>$datos23[nro]</td>
						<td style='width:100px; height:80px'>$datos23[ente]</td>
						<td>$datos23[anio]</td>
						<td>$datos23[codigo]</td>
						<td style='width:100px; height:80px'>$datos23[nombre]</td>
						<td>$datos23[inspeccion]</td>
						<td>$datos23[estatus]</td>
					</tr>";
				}
$tabla23.="</table>";
$tabla23.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla23.="</page>";

/* Seboruco */
$tabla24="<page backtop='5'>
		<h3 align='center'>Municipio Seboruco.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql24="select * from proyecto_gobernacion where municipio like 'Seboruco' order by nro asc;";
$ok24=mysql_query($sql24,$conexion);
while(($datos24=mysql_fetch_assoc($ok24))>0)
{
	$tabla24.="<tr align='center'>
						<td>$datos24[nro]</td>
						<td style='width:100px; height:80px'>$datos24[ente]</td>
						<td>$datos24[anio]</td>
						<td>$datos24[codigo]</td>
						<td style='width:100px; height:80px'>$datos24[nombre]</td>
						<td>$datos24[inspeccion]</td>
						<td>$datos24[estatus]</td>
					</tr>";
				}
$tabla24.="</table>";
$tabla24.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla24.="</page>";

/* Simón Rodríguez */
$tabla25="<page backtop='5'>
		<h3 align='center'>Municipio Simón Rodríguez.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql25="select * from proyecto_gobernacion where municipio like 'Simón Rodríguez' order by nro asc;";
$ok25=mysql_query($sql25,$conexion);
while(($datos25=mysql_fetch_assoc($ok25))>0)
{
	$tabla25.="<tr align='center'>
						<td>$datos25[nro]</td>
						<td style='width:100px; height:80px'>$datos25[ente]</td>
						<td>$datos25[anio]</td>
						<td>$datos25[codigo]</td>
						<td style='width:100px; height:80px'>$datos25[nombre]</td>
						<td>$datos25[inspeccion]</td>
						<td>$datos25[estatus]</td>
					</tr>";
				}
$tabla25.="</table>";
$tabla25.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla25.="</page>";

/* Sucre */
$tabla26="<page backtop='5'>
		<h3 align='center'>Municipio Sucre.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql26="select * from proyecto_gobernacion where municipio like 'Sucre' order by nro asc;";
$ok26=mysql_query($sql26,$conexion);
while(($datos26=mysql_fetch_assoc($ok26))>0)
{
	$tabla26.="<tr align='center'>
						<td>$datos26[nro]</td>
						<td style='width:100px; height:80px'>$datos26[ente]</td>
						<td>$datos26[anio]</td>
						<td>$datos26[codigo]</td>
						<td style='width:100px; height:80px'>$datos26[nombre]</td>
						<td>$datos26[inspeccion]</td>
						<td>$datos26[estatus]</td>
					</tr>";
				}
$tabla26.="</table>";
$tabla26.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla26.="</page>";

/* Torbes */
$tabla27="<page backtop='5'>
		<h3 align='center'>Municipio Torbes.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql27="select * from proyecto_gobernacion where municipio like 'Torbes' order by nro asc;";
$ok27=mysql_query($sql27,$conexion);
while(($datos27=mysql_fetch_assoc($ok27))>0)
{
	$tabla27.="<tr align='center'>
						<td>$datos27[nro]</td>
						<td style='width:100px; height:80px'>$datos27[ente]</td>
						<td>$datos27[anio]</td>
						<td>$datos27[codigo]</td>
						<td style='width:100px; height:80px'>$datos27[nombre]</td>
						<td>$datos27[inspeccion]</td>
						<td>$datos27[estatus]</td>
					</tr>";
				}
$tabla27.="</table>";
$tabla27.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla27.="</page>";

/* Uribante */
$tabla28="<page backtop='5'>
		<h3 align='center'>Municipio Uribante.</h3>
		<table border='1px' align='center'>
		 <tr bgcolor='#C0504D' align='center'>
						<th style='width:100px' scope='col'>Nro</th>
						<th style='width:100px' scope='col'>Entidad</th>
						<th style='width:100px' scope='col'>Año de Aprobación</th>
						<th style='width:100px' scope='col'>Codigo</th>
						<th style='width:100px' scope='col'>Nombre del Proyecto</th>
						<th style='width:100px' scope='col'>Inspección Nº</th>
						<th style='width:100px' scope='col'>Estatus</th>
					</tr>";
		 
$sql28="select * from proyecto_gobernacion where municipio like 'Uribante' order by nro asc;";
$ok28=mysql_query($sql28,$conexion);
while(($datos28=mysql_fetch_assoc($ok28))>0)
{
	$tabla28.="<tr align='center'>
						<td>$datos28[nro]</td>
						<td style='width:100px; height:80px'>$datos28[ente]</td>
						<td>$datos28[anio]</td>
						<td>$datos28[codigo]</td>
						<td style='width:100px; height:80px'>$datos28[nombre]</td>
						<td>$datos28[inspeccion]</td>
						<td>$datos28[estatus]</td>
					</tr>";
				}
$tabla28.="</table>";
$tabla28.="<page_footer><div align='right'>Reporte realizado el ".date('d-m-y')."</div></page_footer>";
$tabla28.="</page>";
/*ahora llamamos a la funcion writeHTml para escribir la variaable $tabla en un archivo con formato PDF*/
$objPDF->writeHTML($tabla);
$objPDF->writeHTML($tabla1);
$objPDF->writeHTML($tabla2);
$objPDF->writeHTML($tabla3);
$objPDF->writeHTML($tabla4);
$objPDF->writeHTML($tabla5);
$objPDF->writeHTML($tabla6);
$objPDF->writeHTML($tabla7);
$objPDF->writeHTML($tabla8);
$objPDF->writeHTML($tabla9);
$objPDF->writeHTML($tabla10);
$objPDF->writeHTML($tabla11);
$objPDF->writeHTML($tabla12);
$objPDF->writeHTML($tabla13);
$objPDF->writeHTML($tabla14);
$objPDF->writeHTML($tabla15);
$objPDF->writeHTML($tabla16);
$objPDF->writeHTML($tabla17);
$objPDF->writeHTML($tabla18);
$objPDF->writeHTML($tabla19);
$objPDF->writeHTML($tabla20);
$objPDF->writeHTML($tabla21);
$objPDF->writeHTML($tabla22);
$objPDF->writeHTML($tabla23);
$objPDF->writeHTML($tabla24);
$objPDF->writeHTML($tabla25);
$objPDF->writeHTML($tabla26);
$objPDF->writeHTML($tabla27);
$objPDF->writeHTML($tabla28);
/*el ultimo paso es generar el archivo especificamente el destino(ventana emrgente o dentro del navegador)*/
$objPDF->Output("Listado_Total_de_Proyectos.pdf","D");
?>