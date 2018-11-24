<?php
	$email=$_POST["email"];
	$psw=$_POST["password"];
	$db = mysqli_connect("localhost", "root", "", "hotel");

	if ($email=="admin@admin.com" and $psw=="1234") {
		echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		echo "<script>location.href='admin.php'</script>";
	}

	else{
		echo '<script>alert("No eres un administrador")</script> ';
		echo "<script>location.href='loginadmin.php'</script>";
	}
 ?>