<?php

$alto = 150;
$ancho = 150;

$src_img = imagecreatefrompng("unidad4.png");

$dst_img = imagecreatetruecolor($ancho, $alto);

imagecopyresized(
	$dst_img,
	$src_img,
	0,
	0,
	0,
	0,
	$ancho,
	$alto,
	imagesx($src_img),
	imagesy($src_img)
);

imagepng($dst_img, "unidad4_thumb.png");

imagedestroy($src_img);
imagedestroy($dst_img);

?>