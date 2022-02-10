<?php

    include("config.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $conn = null;
    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $dbPass);
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch (PDOException $e) {
        echo "Coneccion fallida: ".$e;
        header("Location: ../public/server-error.php");
        
    }
    
?>