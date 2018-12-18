<?php 
		
        $Nombre = $_POST["nombre"];  //son todos los datos recibidos del formulario de crear un evento
		$Email = $_POST["email"];
		$Asunto = $_POST["asunto"];
		$Comentario = $_POST["comentario"];
		$db = mysqli_connect("localhost", "root", "", "hotel");//se conecta a la base de datos
		mysql_select_db("hotel");
		if(!$db) echo "Error en la conexion";
		$sql="INSERT INTO contacto(Nombre,Email,Asunto,Comentario) VALUES ('$Nombre','$Email','$Asunto','$Comentario')";//Inserta los registros en las tablas
		$result = mysqli_query($db, $sql);//se conecta y envia los datos
		if ($result){ echo '<script> alert ("Hemos recibido su comentario con exito.")</script>';
                     echo "<script>location.href='contact.html'</script>";}
		else{ echo '<script> alert ("Error al enviar su consulta, intentelo más tarde.")</script>';}
?>