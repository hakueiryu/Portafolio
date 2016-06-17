<?php
  /*siempre que se vaya a usar variables de sesion se debe comenzar con sesion_start()*/
  @session_start(); 
  /*destruimos la variable de sesion*/
  @session_destroy();

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="estilo.css">
<title>Sistema de Almacenado de Inspecciones y Proyectos (SAIP).</title>
</head>
<body bgcolor="#CCC">



<form action="iniciar_session.php" method="POST" >
  <center><br><br><br>
    <img src="logo.png" width=260px height=240px /><table width="200" border="0" >
    <tr>
     <td colspan="2" ><center><h4> REDI ANDES DELEGACION TACHIRA</h4> </center></td>
    </tr>
    <tr>
      <td>Usuario:</td>
      <td>
      <input type="text" name="login" id="login" placeholder="xxxxxxxxxxx" required autofocus/></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td>
      <input type="password" name="clave" id="clave" placeholder="xxxxxxxxxx" required autofocus/></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input class="boton" name="iniciar" type="submit" value="Iniciar Sesión" /></td>
    </tr>

  </table>
  </center>
</form>
</body>
<div align="center">
<br>
<br>
<br>
<br>
<br>
<p style="text-decoration:none; color:#E43F3F;">Desarrollado por <a href="https://twitter.com/frank_2893" target="_blank" style="text-decoration:none; color:#000;">Franklin Márquez</a>,<a href="https://twitter.com/YohanYm08" target="_blank" style="text-decoration:none; color:#000;">Yohan Agredo</a> para REDI Los Andes.</p>
</div>
</html>

