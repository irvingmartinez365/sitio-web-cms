<?php
    session_start();
    
    session_destroy();
    echo "Sesion cerrada";
    header("Location: ../public/index.php");
    

   