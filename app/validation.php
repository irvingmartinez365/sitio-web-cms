<?php

    include("db.php");

    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];


        $query = $conn->prepare("SELECT id FROM USUARIO WHERE username='$user' AND password='$pass'");
        $query->execute();
        
        $response = $query->fetchAll();

        if(count($response) != 0){
            $ID = $response[0][0];
            $_SESSION["id"] = $ID;
       
            $query = $conn->prepare("SELECT username, image FROM USUARIO WHERE id=$ID");
            $query->execute();
    
            $response = $query->fetchAll();
    
            $_SESSION["username"] = $response[0][0];
    
            $_SESSION["image"] = $response[0][1];
    
            header("Location: ../public/user.php");
        } else {
            $_SESSION["message"] = "Nombre de usuario o contraseña incorrectos";
            header("Location: ../public/login.php");
        }
        
   }

?>