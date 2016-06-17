<?php
	/* para poder crear una clase utilizo la palabra reservada class y luego el nombre de la clase*/
	
	class usuario
	{
		/*hacemos la funcion de crear un usuario*/
		function crear_usuario($conexion,$login,$clave,$nivel,$estatus)
		{
			$sql="insert into usuario(login,clave,nivel,estatus) values('$login','$clave','$nivel','$estatus')";
			$ok=mysql_query($sql,$conexion);
			/*la funcion que indica cuantas filas fueron afectadas en la ultima sentencia es:mysql_affected_rows*/
			$afectadas=mysql_affected_rows($conexion);
			if($afectadas>0)
			echo "<h2>Usuario Creado Correctamente</h2>";
			
			else
			echo"<h2> Error al Crear Usuario</h2>";
			
		}
		
	function cambiar_clave($conexion,$login,$clave)
	{
		$sql="update usuario set clave='$clave' where login='$login'";
		
		$ok=mysql_query($sql,$conexion);
		$afectadas=mysql_affected_rows($conexion);
		if($afectadas>0)
			echo " 
<script language='JavaScript'> alert(\"Cambio de Clave Exitoso\"); document.location.href='php/inicio.php';</script>
"; 
			
		else
			echo " 
<script language='JavaScript'> alert(\"No se Pudo Cambiar de Clave\"); document.location.href='php/inicio.php';</script>
"; 
		
	}	
		
		
		
	}	
?>