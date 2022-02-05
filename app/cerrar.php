<?php
    session_start();
    if(!isset($_SESSION["username"])){
        echo("La session ya esat cerrada");
        header("Location: ../public/index.php");
        
    }

    session_destroy();
    echo "Sesion cerrada";
    header("Location: ../public/index.php");
    

   