
<?php
	$page = "";
	include("components/header.php");
?>
<div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
	<div class="carousel-item active" data-bs-interval="10000">
	<img src="assets/img/slide-1.jpg" class="d-block w-100 slide-image-c" alt="...">
	<div class="carousel-caption d-none d-md-block">
		<h5>Un lugar para desarrollar la lectura</h5>
		<p>En digi-books puedes encontrar un monton de material para leer y mejorar tu lectura.</p>
	</div>
	</div>
	<div class="carousel-item" data-bs-interval="2000">
	<img src="assets/img/slide-2.jpg" class="d-block w-100 slide-image-c" alt="...">
	<div class="carousel-caption d-none d-md-block">
		<h5>Todo tipo de temas</h5>
		<p>Encuentras desde articulos de ciencia, tecnologia, psicologia, entre muchos otros temas.</p>
	</div>
	</div>
	<div class="carousel-item">
	<img src="assets/img/slide-3.jpg" class="d-block w-100 slide-image-c" alt="...">
	<div class="carousel-caption d-none d-md-block">
		<h5>Creado por los mejores programadores</h5>
		<p>Conoce nustro equipo y acerca de que somos capases de hacer.</p>
	</div>
	</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
</button>
</div>

<div class="container mt-5">
	<div class="text-center">
	<h1 class="display-1">Bienvenido</h1>
	<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, dolorum! Reprehenderit, officia cupiditate. Ratione consequuntur qui tempora quaerat.</p>
	</div>
	<div>
	<div class="row mb-5">
		<div class="col">
			<h2>Lorem, ipsum dolor.</h2>
			<p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus reiciendis exercitationem ratione natus! Voluptates est adipisci sed id dolor temporibus, rem facere! Odio omnis qui laboriosam delectus neque, animi mollitia.</p>
		</div>
		<div class="col">
			<img src="assets/img/img-1.jpg" alt="" class="thumbnail img-c float-end">
		</div>
	</div>
	<div class="row mb-5">
		<div class="col">
			<img src="assets/img/img-2.jpg" alt="" class="thumbnail img-c float-start">
		</div>
		<div class="col">
			<h2>Lorem ipsum dolor sit.</h2>
			<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, magni, iusto animi distinctio cumque unde provident nemo rerum quam consequatur, officia possimus tempora omnis rem odio reiciendis sunt iure quo!</p>
		</div>
		
	</div>
	</div>
</div>
<?php include("components/footer.php");?>
