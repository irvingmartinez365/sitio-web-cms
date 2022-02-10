<?php

    include("db.php");

    if(isset($_GET["id"])){
        $ID = $_GET["id"];
        $query = $conn->prepare("SELECT url FROM ARTICULO WHERE id=$ID");
        
        $query->execute();

        $response = $query->fetchAll();

        $fileName = $response[0][0];

        $url = "http://localhost/cms/data/articles/$fileName";
        echo $url;
    }

    


?>