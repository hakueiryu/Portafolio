<?php
function conectar()
{
	$conexion = mysql_connect("mysql.hostinger.es", "u483376584_redi", "redila");
	$db = mysql_select_db("u483376584_redi",$conexion);
	return $conexion;
}
?>