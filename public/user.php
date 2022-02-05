<?php 
    $page = "| Mi Perfil";
    include("components/header.php"); 
?>

<div class="container">
    <div class="container-fluid">
        <h1>Bienvenido <?=$_SESSION["username"]?></h1>
        <img src="<?=$_SESSION["image"]?>" alt="">
    </div>
</div>

<?php include("components/footer.php"); ?>
