<?php
    include("db.php");
    echo $_POST["action"];

    if(isset($_POST["action"])){
        $ID = $_POST["comentID"];
        if($_POST["action"] == "add"){

            $sql = "UPDATE COMENTARIO SET likes = likes + 1 WHERE id=$ID";
            
            
    
        } else if($_POST["action"] == "rest"){

            $sql = "UPDATE COMENTARIO SET likes = likes - 1 WHERE id= $ID";
            
    
        }
        $query = $conn -> prepare($sql);
        $query -> execute();
    }
    
?>