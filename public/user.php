<?php 
    $page = "| Mi Perfil";
    include("components/header.php"); 
?>

<div class="container">
    <div class="container-fluid">
        <h1>Bienvenido <?=$_SESSION["username"]?></h1>
        <img src="<?=$_SESSION["image"]?>" alt="">
    </div>
    <form action="../app/cerrar.php">
        <input role="button" class="btn btn-primary" type="submit" value="Cerrar sesion">
    </form>
</div>

<?php include("components/footer.php"); ?>
