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

        <h2>Eventos</h2>

        <form action="unidad2.php" method="POST" style="max-width: 300px; margin-bottom: 20px;">

            <label for="dia">Día:</label><br>
            <input
                type="number"
                id="dia"
                name="dia"
                min="1"
                max="31"
                required
                style="width: 100%; padding: 8px; margin: 5px 0;"
            ><br>

            <label for="mes">Mes:</label><br>
            <input
                type="number"
                id="mes"
                name="mes"
                min="1"
                max="12"
                required
                style="width: 100%; padding: 8px; margin: 5px 0;"
            ><br>

            <label for="anio">Año:</label><br>
            <input
                type="number"
                id="anio"
                name="anio"
                min="2024"
                max="2100"
                required
                style="width: 100%; padding: 8px; margin: 5px 0;"
            ><br>

            <input
                type="submit"
                value="Calcular Días"
                style="padding: 8px 15px; cursor: pointer; margin-top: 5px;"
            >

        </form>

        <div class="resultado_calculo">

            <?php include("calculo_fecha.php"); ?>

        </div>

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