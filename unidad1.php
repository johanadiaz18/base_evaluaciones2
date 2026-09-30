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
        <h2>Agenda de clases</h2>

        <form action="insertar_clases.php" method="POST" style="max-width: 300px; margin-bottom: 20px;">
            <label for="unidad">Unidad:</label><br>
            <input type="text" id="unidad" name="unidad" maxlength="50" required style="width: 100%; padding: 8px; margin: 5px 0;"><br>

            <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha" required style="width: 100%; padding: 8px; margin: 5px 0;"><br>

            <input type="submit" value="Guardar clase" style="padding: 8px 15px; cursor: pointer;">
        </form>

        <div class="listado_clases">
            <h3>Clases Registradas</h3>
            <?php include("ver_clases.php"); ?>
        </div>
    </section>

    <aside>
    </aside>

    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>

</div>
</body>
</html>