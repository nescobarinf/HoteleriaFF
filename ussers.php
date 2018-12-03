<?php

if (isset($_SESSION["username"]) ) {
    echo "Bienvenidos sean, ".$_SESSION["username"];
      
    
} else{
    
 echo "No tienes acceso a esta pagina";
    
}
    
?>