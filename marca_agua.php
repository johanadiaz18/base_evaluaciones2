<?php

$image = "unidad4.png";
$watermark = "marca.png";

$im = imagecreatefrompng($watermark);
$im2 = imagecreatefrompng($image);

// Posición centrada de la marca de agua
$x = (imagesx($im2) / 2) - (imagesx($im) / 2);
$y = (imagesy($im2) / 2) - (imagesy($im) / 2);

imagecopymerge(
    $im2,
    $im,
    $x,
    $y,
    0,
    0,
    imagesx($im),
    imagesy($im),
    15
);

imagepng($im2, "unidad4_marca.png");

imagedestroy($im);
imagedestroy($im2);

?>