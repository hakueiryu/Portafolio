<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<?php
require("conexion.php");
$conexion=conectar();

$ok=mysql_query("update proyecto_envergadura set
nro='".$_POST['nro']."',
nombre='".$_POST['nombre']."',
entrevistado='".$_POST['entrevistado']."',
telef='".$_POST['telef']."',
telefono='".$_POST['telefono']."',
cargo='".$_POST['cargo']."',
ente='".$_POST['ente']."',
descripcion='".$_POST['descripcion']."',
inspeccion='".$_POST['inspeccion']."',
estatus='".$_POST['estatus']."',
razon='".$_POST['razon']."',
diains='".$_POST['diains']."',
mesins='".$_POST['mesins']."',
anioins='".$_POST['anioins']."',
empresa='".$_POST['empresa']."',
rif='".$_POST['rif']."',
ingenieror='".$_POST['ingenieror']."',
civr='".$_POST['civr']."',
ingenieroi='".$_POST['ingenieroi']."',
civi='".$_POST['civi']."',
avance='".$_POST['avance']."',
valla='".$_POST['valla']."',
diac='".$_POST['diac']."',
mesc='".$_POST['mesc']."',
anioc='".$_POST['anioc']."',
inspector='".$_POST['inspector']."',
telefi='".$_POST['telefi']."',
telefonoi='".$_POST['telefonoi']."',
t_ejecutado='".$_POST['t_ejecutado']."',
t_ejecucion='".$_POST['t_ejecucion']."',
t_ejecutar='".$_POST['t_ejecutar']."'
where codigo='".$_POST['codigo']."'",$conexion);

$afectadas=mysql_affected_rows($conexion);
if($afectadas>=0)
  	$salida = "Actualizacion de Datos Existosa";
  else
    $salida = "Fallo en la Actualizacion de Datos. Este es el Error: ". mysql_error();

echo " 
<script language='JavaScript'> alert(\"$salida\"); document.location.href='listado_proyecto_envergadura.php';</script>
";
?>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>