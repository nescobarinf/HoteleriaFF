<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	$db = mysqli_connect("localhost", "root", "", "hotel"); 

	$sentencia="update usuarios set Nombre='$nombre',Apellido='$apellido',Rut='$rut',email='$email' where id_usuario='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($db,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>