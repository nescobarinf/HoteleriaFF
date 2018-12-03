<?php
session_start();

if(isset($_POST["submit"])) {
    $username = "Ignacio";
    $password = "1234inte";
    if ( (isset($_POST["Nombre"]) ) && (isset($_POST["Password"]) ) ) {
    
        $nombre = $_POST["Nombre"];
        $pass = $_POST["Password"];
        
        if ( ($nombre == $username) &&($pass == $password)) {
        
            $_SESSION["username"] = $nombre;
            header("location: user.php);
        
        }   else {
    
                //header("location: index.php?res=incorrecto");//
                
                echo "ingresaste ".$nombre
        }
    
    
    } else {
    
        header("location: ussers.php");
    
    } else {
    
        header("location: ussers.php");
    

}

?>