<?php

include("usuarios.php");

$usuario1 = new usuarios(
    "Juan",
    "Pérez",
    "1995-05-20"
);

$usuario1->imprime_caracteristicas();

?>