<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/estilo_tablas.css">
	<title>Proyectos Existentes.</title>
<meta charset="utf-8">
</head>
<body>
	<?php
require("conexion.php");

    $link=conectar();

    $ultimos="(select codigo,nombre,estatus,inspeccion,avance from proyecto_inversion where nro = (select MAX(nro) from proyecto_inversion))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_inversion where nro = (select MAX(nro) - 1  from proyecto_inversion))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_cgec where nro = (select MAX(nro) from proyecto_cgec))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_cgec where nro = (select MAX(nro) - 1  from proyecto_cgec))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_planagua where nro = (select MAX(nro) from proyecto_planagua))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_planagua where nro = (select MAX(nro) - 1  from proyecto_planagua))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_espeaten where nro = (select MAX(nro) from proyecto_espeaten))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_espeaten where nro = (select MAX(nro) - 1  from proyecto_espeaten))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_gobernacion where nro = (select MAX(nro) from proyecto_gobernacion))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_gobernacion where nro = (select MAX(nro) - 1  from proyecto_gobernacion))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_ministerio where nro = (select MAX(nro) from proyecto_ministerio))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_ministerio where nro = (select MAX(nro) - 1  from proyecto_ministerio))
    			UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_envergadura where nro = (select MAX(nro) from proyecto_envergadura))
                UNION ALL (select codigo,nombre,estatus,inspeccion,avance from proyecto_envergadura where nro = (select MAX(nro) - 1  from proyecto_envergadura)) limit 10

    ";

   $sql="SELECT SUM(total) SumaTotal
                            FROM (SELECT COUNT(*) total FROM proyecto_inversion
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_cgec
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_planagua
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_espeaten
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_gobernacion
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_ministerio
                            UNION ALL
                            SELECT COUNT(*) total FROM proyecto_envergadura
                            ) t1";
						
		$hg="SELECT SUM(total) SumaTotal
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
					/* El asento en la consulta de ejecucion produce un error ya que no me muestras los demas */		
		$hj="SELECT SUM(total) SumaTotal
                            FROM (SELECT COUNT(estatus) total FROM proyecto_inversion WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_cgec WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_planagua WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_espeaten WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_gobernacion WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_ministerio WHERE estatus = 'En Ejecucion'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_envergadura WHERE estatus = 'En Ejecucion'
                            ) t1";
							
		$hk="SELECT SUM(total) SumaTotal
                            FROM (SELECT COUNT(estatus) total FROM proyecto_inversion WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_cgec WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_planagua WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_espeaten WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_gobernacion WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_ministerio WHERE estatus = 'Paralizado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_envergadura WHERE estatus = 'Paralizado'
                            ) t1";
							
		 $hl="SELECT SUM(total) SumaTotal
                            FROM (SELECT COUNT(estatus) total FROM proyecto_inversion WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_cgec WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_planagua WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_espeaten WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_gobernacion WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_ministerio WHERE estatus = 'Culminado'
                            UNION ALL
                            SELECT COUNT(estatus) total FROM proyecto_envergadura WHERE estatus = 'Culminado'
                            ) t1";
							

    $sql1="select count(*) from proyecto_inversion"; 
    $sql2="select count(*) from proyecto_cgec"; 
    $sql3="select count(*) from proyecto_planagua"; 
    $sql4="select count(*) from proyecto_espeaten"; 
    $sql5="select count(*) from proyecto_gobernacion";
    $sql6="select count(*) from proyecto_ministerio"; 
    $sql7="select count(*) from proyecto_envergadura";


    $ok=mysql_query($sql,$link);
    $ok1=mysql_query($sql1,$link);
    $ok2=mysql_query($sql2,$link);
    $ok3=mysql_query($sql3,$link);
    $ok4=mysql_query($sql4,$link);
    $ok5=mysql_query($sql5,$link);
    $ok6=mysql_query($sql6,$link);
    $ok7=mysql_query($sql7,$link);
    $ok8 = mysql_query($ultimos,$link);
	$ok9 = mysql_query($hg,$link);
	$ok10 = mysql_query($hj,$link);
	$ok11 = mysql_query($hk,$link);
	$ok12 = mysql_query($hl,$link);

?>
<br>
<br>
<?php
  echo"<table class='header' id='tabla1' height='10px' align='center' border='1px'>
  	<h3 align='center'>Proyectos Existentes.</h3>
    <tr>
    <th style='width:100px' scope='col'>Número de Proyecto de Inversion:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de C.G.E.C.:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de Plan Nac. de Agua:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de Especial Atención:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de Gobernación:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de Ministerios:</th>
    <th style='width:100px' scope='col'>Número de Proyecto de Envergadura:</th>
    <th style='width:100px' scope='col'>Número Total de Proyectos Registrados:</th>
    </tr>
    <tr>
    <td><a href='listado_proyecto_inversion.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok1, 0)."</a></td>
    <td><a href='listado_proyecto_cgec.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok2, 0)."</a></td>
    <td><a href='listado_proyecto_planagua.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok3, 0)."</a></td>
    <td><a href='listado_proyecto_espeaten.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok4, 0)."</a></td>
    <td><a href='listado_proyecto_gobernacion.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok5, 0)."</a></td>
    <td><a href='listado_proyecto_ministerio.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok6, 0)."</a></td>
    <td><a href='listado_proyecto_envergadura.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok7, 0)."</a></td>
    <td>".mysql_result($ok, 0)."</a></td>
    </tr>
    </table>";
?>

<?php
  echo"<table class='header' id='tabla1' height='10px' align='center' border='1px'>
  	<h3 align='center'>Estatus de Proyectos.</h3>
    <tr>
	<th style='width:100px' scope='col'>Número Total de Proyectos Sin Iniciar:</th>
    <th style='width:100px' scope='col'>Número Total de Proyectos En Ejecución:</th>
	<th style='width:100px' scope='col'>Número Total de Proyectos Paralizado:</th>
    <th style='width:100px' scope='col'>Número Total de Proyectos Culminados:</th>
    </tr>
    <tr>
    <td><a href='listado_proyecto_sin_iniciar.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok9, 0)."</a></td>
    <td><a href='listado_proyecto_en_ejecucion.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok10, 0)."</a></td>
    <td><a href='listado_proyecto_paralizado.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok11, 0)."</a></td>
    <td><a href='listado_proyecto_culminado.php' style='text-decoration:none; color:#E43F3F;' target='_blank'>".mysql_result($ok12, 0)."</a></td>
	
    </tr>
    </table>";
?>
<!--
    <?php/*
    echo "
                <table class='header' align='center' border='1px'>
                <h3 align='center'>Proyectos Registrados Recientemente.</h3>
                    <tr>
                        <th scope='col'>Codigo</th>
                        <th scope='col'>Nombre del Proyecto</th>
                        <th scope='col'>Estatus</th>
                        <th scope='col'>Inspección</th>
                        <th scope='col'>Avance Fisico</th>
                    </tr>";
        
                        while(($registro=mysql_fetch_assoc($ok8))>0)
                        {


                    echo "<tr>
                        <td>$registro[codigo]</td>
                        <td align='center' width:150px; height:100px;'>$registro[nombre]</td>
                        <td>$registro[estatus]</td>
                        <td>$registro[inspeccion]</td>
                        <td>$registro[avance]%</td>
                    </tr>";
                }
            echo "</table>
                ";
   */ ?>
    -->

</body>
</html>