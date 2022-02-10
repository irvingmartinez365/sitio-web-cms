<?php
  $page = "| Leer";

  include("components/header.php");
?>

<div class="container-fluid">
    <h1 class="display-2">Una biblioteca entera para ti</h1>
    <div>
      <?php
        include("../app/db.php");

        $query = $conn->prepare("SELECT * FROM ARTICULO");
        $query->execute();
        $responce = $query->fetchAll(PDO::FETCH_OBJ);

      if($query-> rowCount() > 0){
        foreach($responce as $article){
          /* echo $article->id."<br>";
          echo $article->title."<br>";
          echo $article->article_date."<br>";
          echo $article->author."<br>";
          echo $article->url."<br>"; */
          ?> 
       
       
      <a class="card-link-c" href="text.php?id=<?=$article->id?>">
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?=$article->url_cover_img?>" class="img-fluid rounded-start img-card-c" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2 class="card-title"><?=$article->title?></h2>
                <p class="card-text"><?=$article->description?></p>
                <p class="card-text"><small class="text-muted">Autor: <?=$article->author?></small></p>
                <p class="card-text"><small class="text-muted">Fecha: <?=$article->article_date?></small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
       
        <?php }
      }
        

      ?>
      <!-- <a class="card-link-c" href="text.php?id=">
        <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/img/img-1.jpg" class="img-fluid rounded-start img-card-c" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Como bajar de peso</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
        
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/img-2.jpg" class="img-fluid rounded-start img-card-c" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/slide-1.jpg" class="img-fluid rounded-sta img-card-crt" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div> -->
    </div>
</div>
<?php include("components/footer.php");?>
