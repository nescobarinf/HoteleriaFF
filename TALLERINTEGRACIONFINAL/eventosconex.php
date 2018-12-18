<?php 
		
        $fecha_actual=date("Y-m-d");
        $Fecha = $_POST["fechaevento"];  //son todos los datos recibidos del formulario de crear un evento
		$Num_personas = $_POST["numpersonas"];
		$Telefono = $_POST["telefono"];
		$Email = $_POST["email"];
		$db = mysqli_connect("localhost", "root", "", "hotel");//se conecta a la base de datos
		mysql_select_db("hotel");
		if(!$db) echo "Error en la conexion";
		if($Fecha>=$fecha_actual){
            $sql="INSERT INTO evento(FechaEvento,NumPersonas,TelefonoInvitado,email) VALUES ('$Fecha','$Num_personas','$Telefono','$Email')";//Inserta los registros en las tablas
		    $result = mysqli_query($db, $sql);//se conecta y envia los datos
            echo '<script> alert ("Hemos recibido su reserva con exito, nos contactaremos con usted por telefono o a traves de email.")</script>';
            echo "<script>location.href='eventos.html'</script>";        
        }else{ 
            echo '<script> alert ("Porfavor ingrese una fecha valida")';
            echo "<script>location.href='eventos.html'</script>"; 
            }
?>