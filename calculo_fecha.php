<?php

if (isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['anio'])) {

    $dia = (int)$_POST['dia'];
    $mes = (int)$_POST['mes'];
    $anio = (int)$_POST['anio'];

    if (checkdate($mes, $dia, $anio)) {

        $fecha_actual = date("Y-m-d");
        $fecha_final = "$anio-$mes-$dia";

        $segundos = strtotime($fecha_final) - strtotime($fecha_actual);
        $dias_faltantes = intval($segundos / 86400);

        if ($dias_faltantes < 0) {

            echo "<p style='color: red;'>La fecha ingresada ya ha pasado.</p>";

        } elseif ($dias_faltantes == 0) {

            echo "<p style='color: green; font-weight: bold;'>¡El evento es hoy!</p>";

        } else {

            echo "<p style='color: blue; font-weight: bold;'>
                    Faltan <strong>$dias_faltantes</strong> días para el evento.
                  </p>";
        }

    } else {

        echo "<p style='color: red;'>La fecha ingresada no es válida.</p>";
    }
}

?>