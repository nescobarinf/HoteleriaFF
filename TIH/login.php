<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
</head>
<body>
	<p>jsfhasdh</p>
	<form>
		
		First name:<br>
  		<input type="text" name="firstname"><br>
  		Last name:<br>
  		<input type="text" name="lastname"><br>
  		<input type="submit" value="Submit">
	</form>
	<?php
	//conectarswe al motor de la base de datos
	include("conex.inc");
	
	//hacer la consulta
	$consulta = "SELECT id_habitacion,tipo,cama FROM habitacion WHERE 1";
	$respuesta = mysqli_query($db, $consulta);
	if (mysqli_num_rows($respuesta)==0) echo "Registro no encontrado";
	if($respuesta)
	//Mostramos la respuesta
		while($fila = mysqli_fetch_object($respuesta))
		echo "$fila->id_habitacion $fila->tipo $fila->cama <br>";
	else
		echo "No se encontraron registros";
	?>

</body>
</html>