<?php

include("usuario.php");

$usuario = new usuario();

$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$resultado = $usuario->registrar_usuario(
    $email,
    $contrasena
);

if ($resultado) {

    echo "Usuario registrado correctamente.";

} else {

    echo "Error al registrar el usuario.";
}

?>