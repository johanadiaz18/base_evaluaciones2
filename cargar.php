<?php

session_start();

include("conexion.php");

// Verificamos que se haya ingresado el código CAPTCHA
if (
    !isset($_POST["confirmacion"]) ||
    !isset($_SESSION["codigos"]) ||
    $_POST["confirmacion"] != $_SESSION["codigos"]
) {

    header("Location: unidad5.php?error=1");
    exit();
}

// Recibimos y validamos los datos del formulario
$nombre = trim($_POST["nombre"]);
$apellido = trim($_POST["apellido"]);
$email = trim($_POST["email"]);
$consulta = trim($_POST["consulta"]);

if (
    $nombre == "" ||
    $apellido == "" ||
    $email == "" ||
    $consulta == "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {

    header("Location: unidad5.php?error=1");
    exit();
}

// Preparamos la consulta
$sql = "INSERT INTO consultas (nombre, apellido, email, consulta)
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "ssss",
    $nombre,
    $apellido,
    $email,
    $consulta
);

$stmt->execute();

$stmt->close();
mysqli_close($conexion);

// Volvemos a unidad5.php con mensaje de éxito
header("Location: unidad5.php?ok=1");
exit();

?>