<?php

class usuarios {

    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $ape, $fecha) {

        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nacimiento = $fecha;
    }

    private function calcular_edad() {

        $fecha_nac = new DateTime($this->fecha_nacimiento);
        $fecha_actual = new DateTime();

        $edad = $fecha_actual->diff($fecha_nac);

        return $edad->y;
    }

    public function imprime_caracteristicas() {

        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Edad: " . $this->calcular_edad() . " años";
    }
}

?>