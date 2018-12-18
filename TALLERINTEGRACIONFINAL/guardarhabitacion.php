<?php
		$lugar = $_POST["lugar"];//son todos los datos recibidos del formulario de crear un evento
		$habitacion = $_POST["habitacion"];
		$personas = $_POST["personas"];
		$llegada = $_POST["llegada"];
		$salida = $_POST["salida"];
		$cantidad=1;
		$db = mysqli_connect("localhost", "root", "", "hotel");
		mysql_select_db("hotel");
		if(!$db) echo "Error en la conexion";
		$sql="INSERT INTO reservas(Ciudad,id_habitacion,Personas,Fechallegada,Fechasalida) VALUES ('$lugar','$habitacion','$personas','$llegada','$salida')";
		$sql2= "UPDATE habitacion SET disponibilidad = disponibilidad - $cantidad WHERE id_habitacion=$habitacion";
		$sql3= "SELECT * FROM habitacion WHERE disponibilidad <=1";
		$result = mysqli_query($db, $sql);
		$result2 = mysqli_query($db,$sql2);
		if ($result & $result2){ echo '<script>alert("Datos recibidos con exito.")</script>';
			echo "<script>location.href='TALLERINTEGRACIONFINAL/registro.html'</script>";
		}

		else{ echo '<script>alert("Error al insertar registro.")</script>';
			echo "<script>location.href='TALLERINTEGRACIONFINAL/registro.html'</script>";
		}
?>