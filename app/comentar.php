<?php
    include("db.php");
    if(isset($_POST["comentar"])){
        $coment = $_POST["coment"];
        $articleID = $_GET["id"];
        $userID = $_SESSION["id"];
        $date = date("Y-m-d");

        $sql = "INSERT INTO COMENTARIO (id_user, id_article, content, coment_date) VALUES($userID,$articleID,'$coment','$date')";
        
        $query = $conn -> prepare($sql);

        $query -> execute();
    }

    header("Location: ../public/text.php?id=$articleID");
?>