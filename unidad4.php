<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="container">

	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>

		<nav>
			<?php include("botonera.php"); ?>
		</nav>
	</header>

	<section>
        <section>

    <h2>Imágenes con PHP</h2>

    <?php
        include("thumbnail.php");
        include("marca_agua.php");
    ?>

    <h3>Thumbnail de 150 x 150px</h3>
    <img src="unidad4_thumb.png" alt="Thumbnail">

    <h3>Imagen con marca de agua</h3>
    <img src="unidad4_marca.png" alt="Imagen con marca de agua">

</section>

	</section>

	<aside>
	</aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">
			Programación en PHP y MySQL - Nivel Avanzado
		</a>
	</footer>

</div>

</body>
</html>