<?php

    include("db.php");

    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];


        $query = $conn->prepare("SELECT ID FROM USERS WHERE USERNAME='$user' AND PASSWORD='$pass'");
        $query->execute();
        
        $response = $query->fetchAll();
        

        $ID = $response[0][0];
        $_SESSION["id"] = $ID;
   
        $query = $conn->prepare("SELECT USERNAME, IMAGE FROM USERS WHERE ID=$ID");
        $query->execute();

        $response = $query->fetchAll();

        $_SESSION["username"] = $response[0][0];

        $_SESSION["image"] = $response[0][1];

        header("Location: ../public/user.php");
   }

?>