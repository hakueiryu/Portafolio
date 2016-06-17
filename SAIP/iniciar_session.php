<?php
/*usamos la funcion session_start porq ulizaremos variables de session en esta pagina*/
session_start();
require("php/conexion.php");
$conexion=conectar();

	/* recibimos el usuario y la clave*/
$login=$_POST["login"];
$clave=$_POST["clave"];
/*buscamos en la tabla usuario si la combinacion login clave es correcta*/
$clave=md5($clave);

$sql="select * from usuario where login='$login' and clave='$clave'";
$ok=mysql_query($sql,$conexion);
$datos=mysql_fetch_assoc($ok);

if($datos['nivel']=="A")
{

	/*si el estatus vale A significa que si consiguio al usuario y se encuentra activo*/
	$_SESSION["usuario"]=$datos["estatus"];
	$_SESSION["login"]=$login;	
	/* todo correcto, puede entrar*/
	
	header("Location: inicio_admin.php");
}elseif ($datos['nivel']=="I") {

	$_SESSION["usuario"]=$datos["estatus"];
	$_SESSION["login"]=$datos["login"]=$login;

	header("Location: inicio_invitado.php");
	
}else{

	echo " 
<script language='JavaScript'> alert(\"Usuario o Contrase#a Invalidos\"); document.location.href='index.php';</script>
"; 
	
}

?>