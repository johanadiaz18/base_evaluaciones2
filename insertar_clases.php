<?php

include("conexion.php");

if (isset($_POST["unidad"]) && isset($_POST["fecha"])) {

    $unidad = trim($_POST["unidad"]);
    $fecha = $_POST["fecha"];

    if ($unidad != "" && $fecha != "") {

        $sql = "INSERT INTO clases (unidad, fecha)
                VALUES (?, ?)";

        $stmt = $conexion->prepare($sql);

        $stmt->bind_param(
            "ss",
            $unidad,
            $fecha
        );

        $stmt->execute();
        $stmt->close();
    }
}

header("Location: unidad1.php");
exit();

?>