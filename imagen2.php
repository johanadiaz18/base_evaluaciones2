<?php

session_start();

$codigo = $_SESSION["codigos"];

$imagen = imagecreate(150, 40);

$fondo = imagecolorallocate($imagen, 220, 220, 220);
$texto = imagecolorallocate($imagen, 0, 0, 0);

imagestring(
	$imagen,
	5,
	25,
	12,
	$codigo,
	$texto
);

header("Content-Type: image/png");

imagepng($imagen);

imagedestroy($imagen);

?>