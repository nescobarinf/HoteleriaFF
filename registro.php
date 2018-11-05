<?php

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$rut=$_POST['rut'];
	$mail=$_POST['correo'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	$mysqli = new MySQLi("localhost", "root","", "hotel");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$nombre','$apellido','$rut','$mail','$pass')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>