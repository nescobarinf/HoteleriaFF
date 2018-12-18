<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "hotel";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM habitacion WHERE tipo LIKE '' ORDER By id_habitacion LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM habitacion WHERE tipo LIKE '%$q%' OR precio LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID Habitacion</td>
    					<td>Tipo</td>
    					<td>Cama</td>
    					<td>Precio</td>
    					<td>Disponibilidad</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id_habitacion']."</td>
    					<td>".$fila['tipo']."</td>
    					<td>".$fila['cama']."</td>
    					<td>".$fila['precio']."</td>
    					<td>".$fila['ocupado']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS";
    }


    echo $salida;

    $conn->close();



?>