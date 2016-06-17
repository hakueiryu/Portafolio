<?php
  /*siempre que se vaya a usar variables de sesion se debe comenzar con sesion_start()*/
  @session_start(); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../estilo.css">
<title>Cambiar Clave</title>
</head>
<body>



<form action="../controlador.php" method="post">
<input type="hidden" name="accion" value="cambiar_clave" />
  <center><br><br><br>
    <table width="200" border="0" >
    <tr>
     <td colspan="2" ><center><h4>Cambio de Clave</h4> </center></td>
    </tr>
    <tr>
      <td>Usuario:</td>
      <td>
      <input type="text" name="login" id="login" value="<?php echo $_SESSION['login']?>"/></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td>
      <input type="password" name="clave" id="clave" required autofocus/></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input class="boton" name="iniciar" type="submit" value="Cambiar Clave" /></td>
    </tr>

  </table>
  </center>
</form>
</body>
</html>

