<?php 
    
    $page = "| Mi Perfil";
    include("components/header.php");
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    } 
?>

<div class="container m-auto">
    <div class="container-fluid text-center">
        <h1>Bienvenido <?=$_SESSION["username"]?></h1>
        <img src="<?=$image?>" alt="" class="profile-img-c">
    </div>
    <form action="../app/cerrar.php" class="text-center my-5">
        <input role="button" class="btn btn-primary" type="submit" value="Cerrar sesion">
    </form>
</div>

<?php include("components/footer.php"); ?>
