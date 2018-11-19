<?php 
		$lugar = $_POST["lugar"];//son todos los datos recibidos del formulario de crear un evento
		$habitacion = $_POST["habitacion"];
		$personas = $_POST["personas"];
		$estadia = $_POST["estadia"];
		$cama = $_POST["tipocama"];
		$db = mysqli_connect("localhost", "root", "", "hotel");//se conecta a la base de datos
		mysql_select_db("hotel");
		if(!$db) echo "Error en la conexion";
		$sql="INSERT INTO reservas(Ciudad,id_habitacion,Personas,Estadia,Cama) VALUES ('$lugar','$habitacion','$personas','$estadia','$cama')";//Inserta los registros en las tablas
		$result = mysqli_query($db, $sql);//se conecta y envia los datos
		if ($result) echo "Datos recibidos con exito.";
		else echo "Error al insertar registro.";
?>