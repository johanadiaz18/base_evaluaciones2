<?php
session_start();

$numero1 = rand(0,9);
$numero2 = rand(0,9);
$numero3 = rand(0,9);

$minus = array(
	"a","b","c","d","e","f","g","h","i","j","k","l","m",
	"n","ñ","o","p","q","r","s","t","u","v","w","x","y","z"
);

$mayus = array(
	"A","B","C","D","E","F","G","H","I","J","K","L","M",
	"N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z"
);

$signos = array("!","#","$","%","&","=");

$generador_min = rand(0,26);
$generador_may = rand(0,26);
$generador_sig = rand(0,5);

$_SESSION["codigos"] =
	($numero1).
	($minus[$generador_min]).
	($numero2).
	($mayus[$generador_may]).
	($signos[$generador_sig]).
	($numero3);
?>

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

		<h2>Consultas</h2>

		<?php

if (isset($_GET["error"])) {
	echo "<p>El código de seguridad ingresado es incorrecto.</p>";
}

if (isset($_GET["ok"])) {
	echo "<p>La consulta fue enviada correctamente.</p>";
}

?>

		<form action="cargar.php" method="post">

			<p>
				<label>Nombre:</label><br>
				<input type="text" name="nombre" required>
			</p>

			<p>
				<label>Apellido:</label><br>
				<input type="text" name="apellido" required>
			</p>

			<p>
				<label>Email:</label><br>
				<input type="email" name="email" required>
			</p>

			<p>
				<label>Consulta:</label><br>
				<textarea name="consulta" rows="5" required></textarea>
			</p>

			<p>
				<label>Código de seguridad:</label><br><br>

				<img src="imagen2.php" alt="Código de seguridad">

				<br><br>

				<input type="text" name="confirmacion" required>
			</p>

			<p>
				<input type="submit" value="Enviar consulta">
			</p>

		</form>

	</section>

	<aside>
    
	</aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>

</body>
</html>
