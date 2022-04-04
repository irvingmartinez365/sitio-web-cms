<?php 
    /* PROCESAR SOLICITUD */
    include("../app/db.php");
    $articleID = $_GET["id"];
    $query = $conn->prepare("SELECT * FROM ARTICULO WHERE id=$articleID");
    
    $query->execute();
    $response = $query->fetchAll(PDO::FETCH_OBJ);
    
    $article = $response[0];

    $articleName = $article->title;
    $page = $articleName; 
    $text = true;
    include("components/header.php");
?>

<div class="container">
    <div id="container-article" data-article-id="<?=$articleID?>">

    </div>
    <hr>
    <section class="coments-section">
        <?php
            if(isset($_SESSION["username"])){ ?>
                <div class="conatiner coment-form mb-5">
                    <form action="../app/comentar.php?id=<?=$articleID?>" method="POST" id="user-coment">
                        <label for="coment" class="h2 block">Comentar: </label>
                        <div class="d-flex">
                            <div class="align-self-center">
                                <img src="<?=$_SESSION["image"]?>" alt="" class="profile-coment-c">

                            </div>
                            <div class=" container-fluid">
                                <div class="coment-info">
                                    <strong><?=$_SESSION["username"]?><small>#<?=$_SESSION["id"]?></small>: </strong>
                                </div>
                                <textarea name="coment" id="coment-txt" width="100%" class="form-control coment-area" rows="1"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="comentar" value="Comentar" class="btn btn-outline-primary btn-comentar mt-2">
                        
                    </form>
                </div>
            <?php } else { ?>
                <div class="container center-text">
                    <a href="login.php" rol="button" class="btn btn-success block">Ingresa para comentar</a>
                </div>
            <?php }
           
        ?>

        <div class="coment-box-c ">
            <?php
            
                $query = $conn->prepare("SELECT * FROM COMENTARIO WHERE id_article=$articleID");
                $query ->  execute();
                $response = $query -> fetchAll(PDO::FETCH_OBJ);

                $comentsNum = $query -> rowCount();
                ?>
                
            <h2 id="comentarios"><span><?=$comentsNum?></span> comentarios: </h2>
            <?php
                if($comentsNum > 0){
                        foreach($response as $item){
                            $comentUserID = $item -> id_user;

                            $query = $conn->prepare("SELECT username, image FROM USUARIO WHERE id=$comentUserID");
                            $query -> execute();
                            $res = $query -> fetchAll();

                            $comentUsername = $res[0][0];
                            $comentImage = $res[0][1];
                            $comentContentOutFormat = $item -> content;
                            $comentContent = str_replace("\n", "<br>", $comentContentOutFormat);
                            $comentLikes = $item -> likes;

                            ?>
                            
                            <div class="comment-item container-fluid mb-3">
                                <div class="d-flex">
                                    <div class="align-self-center m-2">
                                        <img src="<?=$comentImage?>" alt="" class="profile-coment-c">

                                    </div>
                                    <div class="coment-content">
                                        <div class="coment-info">
                                            <strong><?=$comentUsername?><span style="color: #444;">#<?=$comentUserID?></span></strong>
                                        </div>
                                        <div class="coment-txt">
                                            <?=$comentContent?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="coment-interactions d-flex" data-coment-id="<?=$item -> id?>">
                                    <span class="coments-likes">
                                        <button class="btn like" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Me gusta"><i class="far fa-heart"></i></button><span><?=$comentLikes?></span>
                                    </span>
                                    <span class="coments-responses">
                                        <a class="btn response" href="#user-coment" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Responder"><i class="far fa-comment-alt"></i></a>
                                    </span>
                                    <span class="coments-report">
                                        <button class="btn report" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reportar"><i class="far fa-flag"></i></button>

                                    </span>    
                                </div>          
                            </div>


                        <?php
                        } 
                    }  
            ?>
            
        </div>
    </section>
</div>
<?php include("components/footer.php")?>

