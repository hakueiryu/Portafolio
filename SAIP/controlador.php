<?php
	require("php/conexion.php");
	$conexion=conectar();
	
	/*recibo la variable mas importante, se llama accion y determina que vamos a hacer con los datos recibidos*/
	
	$accion=$_REQUEST['accion'];
	/*$_REQUEST recibe la variable, no importa si es enviada por el metodo post o por el metodo get*/
	
	switch($accion)
	{
		case 'cambiar_clave':
		require("usuario.class.php");
		/*instanciar un objeto de la clase usuario*/
		$objusuario=new usuario;
		$clave=md5($_POST['clave']);
		$objusuario->cambiar_clave($conexion,$_POST['login'],$clave);
		break;
		
		case 'crear_usuario':
		require("usuario.class.php");
		$objusuario=new usuario;
		$clave=md5($_POST['clave']);
		$objusuario->crear_usuario($conexion,$_POST['login'],$clave,$_POST['nivel'],$_POST['estatus']);
		break;
	
	
	}

?>