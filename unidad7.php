<?php

include("producto.php");

$producto = new producto();

// Cargar producto
if (isset($_POST["cargar"])) {

	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];

	$producto->introducir_producto($nombre, $descripcion, $precio);

	header("Location: unidad7.php");
	exit();
}

// Eliminar producto
if (isset($_GET["eliminar"])) {

	$id_producto = $_GET["eliminar"];

	$producto->eliminar_producto($id_producto);

	header("Location: unidad7.php");
	exit();
}

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

		<h2>Compras</h2>

		<form action="unidad7.php" method="post">

			<p>
				Nombre:<br>
				<input type="text" name="nombre" required>
			</p>

			<p>
				Descripción:<br>
				<textarea name="descripcion" required></textarea>
			</p>

			<p>
				Precio:<br>
				<input type="number" name="precio" step="0.01" required>
			</p>

			<p>
				<input type="submit" name="cargar" value="Cargar producto">
			</p>

		</form>

		<h3>Productos cargados</h3>

		<?php

		$resultado = $producto->listar_producto();

		if ($resultado->num_rows > 0) {

			while ($fila = $resultado->fetch_assoc()) {

				echo "<p>";

				echo "Nombre: " . $fila["nombre"] . "<br>";
				echo "Descripción: " . $fila["descripcion"] . "<br>";
				echo "Precio: $" . $fila["precio"] . "<br>";

				echo "<a href='unidad7.php?eliminar=" .
					 $fila["id_producto"] .
					 "'>Eliminar</a>";

				echo "</p>";
			}

		} else {

			echo "<p>No hay productos cargados.</p>";
		}

		?>

	</section>

	<aside>
    
  </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>