<?php
    include("db.php");
    echo $_POST["action"];

    if(isset($_POST["action"])){
        $comentID = $_POST["comentID"];
        $userID = $_SESSION["id"];
        if($_POST["action"] == "add"){

            $sql = "INSERT INTO likes (id_user, id_coment) VALUES('$userID','$comentID')"; 
            
    
        } else if($_POST["action"] == "rest"){

            $sql = "DELETE FROM likes WHERE id_user = '$userID' AND id_comenT = '$comentID'"; 
          
    
        }
        $query = $conn -> prepare($sql);
        $query -> execute();
    }
    
?>