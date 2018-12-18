<?php
session_start();
$user = $_POST["user"];
$password = $_POST["password"];
$db = mysqli_connect("localhost", "root", "", "hotel");

//Buscamos el usuario en la BD
// SELECT usuario, password FROM TablaUsuarios
// WHERE usuario=$user AND password=$password

//Para este ejm asumimos User=admin Password=1234

	$sql=mysqli_query($db,"SELECT * FROM usuarios WHERE email='$user'");
	if($f=mysqli_fetch_assoc($sql)){
		if($password==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];
			echo "<script>location.href='index.html'</script>";	
				}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='index0.html'</script>";
			}
	}else{
			
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
			
			echo "<script>location.href='index0.html'</script>";	

		}

?>