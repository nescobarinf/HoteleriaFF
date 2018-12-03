<?php
	$db = mysqli_connect("localhost", "root", "", "hotel");
	$sql=("SELECT * FROM usuarios");
	
	$query=mysqli_query($db,$sql);
		echo "<table border='1'; class='table table-hover';>";
		echo "<tr class='warning'>";
		echo "<td>Id</td>";
		echo "<td>Nombre</td>";
		echo "<td>Apellido</td>";
		echo "<td>Contraseña</td>";
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

	    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
			echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
			

			
		echo "</tr>";
	}

	echo "</table>";

		extract($_GET);
		if(@$idborrar==2){

			$sqlborrar="DELETE FROM usuarios WHERE id_usuario=$id";
			$resborrar=mysqli_query($db,$sqlborrar);
			echo '<script>alert("REGISTRO ELIMINADO")</script> ';
			//header('Location: proyectos.php');
			echo "<script>location.href='admin.php'</script>";
		}

?>