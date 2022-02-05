<?php
	    session_start();

	$title = "";
	if(!isset($text)){
		$title = "Digi-Book ".$page;

	} else {
		$title = $page;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="assets/icon/favicon.ico">
		<title><?=$title?></title>

		<!-- FONTAWESOME -->
		<script defer src="https://kit.fontawesome.com/be7646c638.js" crossorigin="anonymous"></script>
		<!-- BOOTSTRAP -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="styles/styles.css">
	</head>
	<body>
			
		<header>
			<nav class="navbar navbar-dark bg-dark navbar-expand-md">
				<div class="container-fluid">
					<span class="navbar-brand display-1" translate="false">
						<img src="assets/icon/icono.png" alt="" width="25px">
						Digi-Book
					</span>
					<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-btn" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse d-md-flex justify-content-between" id="navbar-btn">
						<ul class="navbar-nav">
							<li class="nav-item"><a href="../public/" class="nav-link <?php if($page == "") echo "active"?>">Inicio</a></li>
							<li class="nav-item"><a href="leer.php" class="nav-link <?php if($page == "| Leer" || isset($text)) echo "active"?>">Leer</a></li>
							<li class="nav-item"><a href="nosotros.php" class="nav-link <?php if($page == "| Nosotros") echo "active"?>">Nosotros</a></li>
							
						</ul>
						<?php if(isset($_SESSION["username"]) && isset($_SESSION["image"])){ ?>
							<a href="user.php">
								<span class="porfile-name-c"><?=$_SESSION["username"]?></span>
								<img class="porfile-c" src="<?= $_SESSION["image"]?>" alt="">
							</a>
						<?php } else {?>
						<a href="login.php" class="btn btn-outline-success" role="button">Login</a>
						<?php }?>
					</div>
					 
				</div>
				
			</nav>
		</header>