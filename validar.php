
<?php
session_start();
//include("connect_db.php");
$mysqli = new MySQLi("localhost", "root","", "hotel");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

	$email=$_POST['mail'];
	$pass=$_POST['password'];


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$email'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f2['id_usuario'];
			$_SESSION['user']=$f2['Nombre'];
			

			header("Location: index.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='login.php'</script>";	

	}

?>