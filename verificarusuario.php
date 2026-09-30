<?php

include("usuario.php");

$usuario = new usuario();

$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$resultado = $usuario->verificar_usuario(
    $email,
    $contrasena
);

if ($resultado) {

    echo "Ingreso exitoso. Usuario verificado correctamente.";

} else {

    echo "Email o contraseña incorrectos.";
}

?>