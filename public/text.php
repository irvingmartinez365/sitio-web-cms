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
                    <form action="../app/comentar.php" method="POST" id="user-coment">
                        <label for="coment" class="h2 block">Comentar: </label>
                        <div class="d-flex">
                            <div class="align-self-center">
                                <img src="<?=$_SESSION["image"]?>" alt="" class="profile-coment-c">

                            </div>
                            <div class=" container-fluid">
                                <div class="coment-info">
                                    <strong><?=$_SESSION["username"]?><small>#<?=$_SESSION["id"]?></small>: </strong>
                                </div>
                                <textarea spellcheck="false" name="coment" id="coment-txt" width="100%" class="form-control" rows="1"></textarea>
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
            /*
                $conn->prepare("");

                $countComents;
            */
            ?>
            <h2><span><?=$countComents?></span> comentarios: </h2>
            
            <div class="comment-item container-fluid mb-3">
                <div class="d-flex">
                    <div class="align-self-center m-2">
                        <img src="<?=$_SESSION["image"]?>" alt="" class="profile-coment-c">

                    </div>
                    <div class="coment-content">
                        <div class="coment-info">
                            <strong>Name user<span style="color: #444;">#1231</span></strong>
                        </div>
                        <div class="coment-txt">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae itaque voluptate debitis magnam esse tempora sint officia iste deleniti obcaecati voluptates sequi laudantium suscipit dolor placeat pariatur nulla, mollitia, libero a eos atque quis.</span>
                        </div>
                    </div>
                </div>
                
                <div class="coment-interactions d-flex">
                    <span class="coments-likes">
                        <button class="btn like" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Me gusta"><i class="far fa-heart"></i></button><span>2</span>
                    </span>
                    <span class="coments-responses">
                        <a class="btn response" href="#user-coment" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Responder"><i class="far fa-comment-alt"></i></a>
                    </span>
                    <span class="coments-report">
                        <button class="btn report" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reportar"><i class="far fa-flag"></i></button>

                    </span>    
                </div>          
            </div>
        </div>
    </section>
</div>
<?php include("components/footer.php")?>

