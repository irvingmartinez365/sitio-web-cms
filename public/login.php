<?php session_start(); 
if(isset($_SESSION["username"])) {header("Location: index.php");} ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="assets/icon/favicon.ico">
		<title>Iniciar sesion</title>

		<!-- FONTAWESOME -->
		<script defer src="https://kit.fontawesome.com/be7646c638.js" crossorigin="anonymous"></script>
		<!-- BOOTSTRAP -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="styles/styles.css">
	</head>
	<body>
        <div class="row-sm-12">
            <form method="POST" action="../app/validation.php" class="col-sm-4 px-4 border bg-light mx-auto mt-5">
                <h1 class="h1 text-center">Log in</h1>

                <label for="usuario" class="form-label">Nombre de usuario</label>
                <input name="user" id="usuario" type="text" class="form-control mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input name="pass" id="contraseña" type="password" class="form-control mb-5">
                <div class="container-fuid text-center ">
                    <input name="submit" type="submit" value="Ingresar" class="btn btn-success mb-3 w-100">
                </div>
				<a href="register.php">Registrarse</a>
            </form>
        </div>
		<?php if(isset($_SESSION["message"])){ ?>
            <script>alert("<?= $_SESSION["message"]?>")</script>
        <?php } ?>
    </body>
</html>