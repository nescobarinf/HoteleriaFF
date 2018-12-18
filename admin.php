<head>
    <meta charset="utf-8">
    <title>Actualizar datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="style/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<?php

	$db = mysqli_connect("localhost", "root", "", "hotel"); 
	$sql=("SELECT * FROM usuarios"); 
	 
	$query=mysqli_query($db,$sql); 
		echo "<table border='1'; class='table table-hover';>"; 
		echo "<tr class='warning'>"; 
		echo "<td>Id</td>"; 
		echo "<td>Nombre</td>"; 
		echo "<td>Apellido</td>"; 
		echo "<td>Rut</td>"; 
		echo "<td>Email</td>"; 
		echo "<td>Editar</td>"; 
		echo "<td>Borrar</td>"; 
		echo "</tr>"; 
			?> 
<?php  
	 while($arreglo=mysqli_fetch_array($query)){ 
	  	echo "<tr class='success'>"; 
	    	echo "<td>$arreglo[0]</td>"; 
	    	echo "<td>$arreglo[1]</td>"; 
	    	echo "<td>$arreglo[2]</td>"; 
	    	echo "<td>$arreglo[3]</td>"; 
	    	echo "<td>$arreglo[4]</td>"; 
 
	    	echo "<td><a href='actualizar.php?id_usuario=$arreglo[0]'><img src='style/images/actualizar.png' class='img-rounded'style='width:25px'></td>"; 
			echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='style/images/eliminar.png' class='img-rounded' style='width:25px'/></a></td>"; 
			 
 
			 
		echo "</tr>"; 
	} 
 
	echo "</table>"; 
 
		extract($_GET); 
		if(@$idborrar==2){ 
 
			$sqlborrar="DELETE FROM usuarios WHERE id_usuario=$id"; 
			$resborrar=mysqli_query($db,$sqlborrar); 
			echo '<script>alert("REGISTRO ELIMINADO")</script> '; 
			echo "<script>location.href='admin.php'</script>"; 
		} 
 
?>