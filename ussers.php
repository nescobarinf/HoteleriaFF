<?php

session_start();
if (isset($_SESSION["username"]) ) {
    echo "Bienvenido seas, ".$_SESSION["username"];
      
    
} else{
    
 echo "No tienes acceso a esta pagina";
    
}
    
?>