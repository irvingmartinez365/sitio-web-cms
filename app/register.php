<?php
    include("db.php");
    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        $query = $conn->prepare("SELECT id FROM USUARIO WHERE email='$email'");
        $query->execute();
        $response = $query->fetchAll();
        if(!count($response) > 0){
            $query = $conn->prepare("INSERT INTO USUARIO(email,username,password) VALUES('$email','$user','$pass')");
            $query->execute();
            if(!$query){
                $_SESSION["message"] = "Parece que ubo un error, prueba intentandolo mas tarde o intenta comunicarte con el desarrollador";
                header("Location: ../public/register.php");
            }else{
                $_SESSION["message"] = "Se ha registrado exitosamente!! Ahora puede ingresar con sus datos.";
                header("Location: ../public/login.php");
            }
            

        }else {
            $_SESSION["message"] = "El correo electronico que ingreso ya esta asociado a una cuenta >.<";

            header("Location: ../public/register.php");
        }

    }else{
        header("Location: ../public/index.php");
    }

?>