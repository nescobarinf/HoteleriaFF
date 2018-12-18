<?php

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$rut=$_POST['rut'];
	$mail=$_POST['correo'];
	$pass= $_POST['password'];
	$rpass=$_POST['rpassword'];
	$md5=md5("$pass");

	$db = mysqli_connect("localhost", "root", "", "hotel");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($db,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='registrarusuario.html'</script>";
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($db,"INSERT INTO usuarios VALUES('','$nombre','$apellido','$rut','$mail','$pass')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index0.html'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Contraseñas incorrectas");</script> ';
			echo "<script>location.href='registrarusuario.html'</script>";}