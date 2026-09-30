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

        <h2>Comentarios</h2>

        <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">

            <!-- Formulario de ingreso de comentarios -->
            <div style="flex: 1; min-width: 280px;">

                <form action="comentarios.php" method="POST"
                      style="display: flex; flex-direction: column; gap: 10px; max-width: 320px;">

                    <label for="nombre">Nombre:</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        required
                        style="padding: 8px;"
                    >

                    <label for="apellido">Apellido:</label>
                    <input
                        type="text"
                        id="apellido"
                        name="apellido"
                        required
                        style="padding: 8px;"
                    >

                    <label for="email">Mail:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        style="padding: 8px;"
                    >

                    <label for="comentario">Comentario:</label>
                    <textarea
                        id="comentario"
                        name="comentario"
                        rows="4"
                        required
                        style="padding: 8px; resize: vertical;"
                    ></textarea>

                    <input
                        type="submit"
                        value="Enviar Comentario"
                        style="padding: 10px; cursor: pointer; background-color: #eee; border: 1px solid #ccc;"
                    >

                </form>

            </div>


            <!-- Listado acumulado de comentarios -->
            <div style="flex: 1; min-width: 280px;">

                <h3 style="margin-top: 0;">Listado de Comentarios</h3>

                <?php

                $nombre_archivo = "comentarios.txt";

                if (file_exists($nombre_archivo)) {

                    $archivo = fopen($nombre_archivo, "r");

                    fpassthru($archivo);

                    fclose($archivo);

                } else {

                    echo "<p>No hay comentarios registrados aún.</p>";
                }

                ?>

            </div>

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