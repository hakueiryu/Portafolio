<?php
	require_once('../conexion/conexion.php');

	sleep(1);

	$search = '';
	if(isset($_POST['search']))
	{
		$search = strtolower($_POST['search']);
	}

	$consulta = "SELECT * from proyecto_planagua where codigo LIKE '%".$search."%' OR nombre LIKE '%".$search."%' ORDER BY nro";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);


?>

<?php

if($total>0 && $search!=''){ ?>
	<h2 align="center">Resultado de la busqueda.</h2>
	<?php do {?>
		<div align="center">
		<table>
			<tr class="titulo">
				<th scope="col">Codigo:</th>
				<th scope="col">Nombre:</th>
			</tr>
			<tr>
			<td class="contenido"><a href="php/proyectopa.php?codigo=<?php echo $fila['codigo'] ?>&search=<?php echo $search ?>"><?php echo str_replace($search,'<strong>'.$search.'</strong>',$fila['codigo']) ?></a></td>
			<td><?php echo str_replace($search,'<strong>'.$search.'</strong>', $fila['nombre']) ?></td>
			</tr>
		</table>
		
		
		</div>
	<?php }while($fila=mysqli_fetch_assoc($resultado));?>
<?php }

elseif ($total>0 && $search=='') echo '<h2>Ingresa un parámetro de búsqueda</h2><p>Ingrese el codigo o el nombre del proyecto</p>';
else echo '<h2>No se han encontrado resultados</h2><p>Intenta de nuevo</p>';
?>