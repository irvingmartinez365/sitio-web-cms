<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediar secciones</title>
    <!-- FONTAWESOME -->
    <script defer src="https://kit.fontawesome.com/be7646c638.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="styles/styles.css">

</head>
<body>
    <div class="flex-nowrap">
         <nav class="nav nav-pills flex-column border nav-c" style="width: 25%; height: 100vh;">
            <span class="display-4">CMS</span>
            <a class="nav-link <?php if($page == "index"){echo("active");}?>" aria-current="page" href="/cms/admin/"><i class="fas fa-home"></i> Dashboard</a>
            <a class="nav-link  <?php if($page == "articulos"){echo("active");}?>" href="articulos.php"><i class="fas fa-file-alt"></i> Articulos</a>
            <div class="nav-item dropend">
                <a class="nav-link  <?php if($page == "secciones"){echo("active");}?> dropdown-toggle" data-bs-toggle="dropdown" href="secciones.php" role="button" aria-expanded="false"><i class="fas fa-globe"></i> Secciones</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="secciones.php#inicio">Inicio <i class=""></i></a></li>
                  <li><a class="dropdown-item" href="secciones.php#leer">Leer</a></li>
                  <li><a class="dropdown-item" href="secciones.php#nosotros">Nosotros</a></li>
                  <li><a class="dropdown-item" href="secciones.php#seccion-de-lectura">Seccion de lectura</a></li>
                </ul>
            </div>
            <a class="nav-link  <?php if($page == "colores"){echo("active");}?>" href="colores.php"><i class="fas fa-palette"></i> Colores</a>
            <a class="nav-link mb-5  <?php if($page == "configuracion"){echo("active");}?>" href="configuracion.php"><i class="fas fa-cog"></i> Configuracion</a>
            <a role="button" href="/cms/public/" class="btn btn-outline-primary">Ver sitio web</a>
        </nav>