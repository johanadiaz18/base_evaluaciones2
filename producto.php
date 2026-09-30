<?php

class producto {

    // Propiedades de la clase
    public $id_producto;
    public $nombre;
    public $descripcion;
    public $precio;

    // Conexión con la base de datos
    private $conexion;

    // Constructor
    public function __construct() {

        include("conexion.php");

        $this->conexion = $conexion;
    }

    // Método para introducir un producto
    public function introducir_producto($nombre, $descripcion, $precio) {

        $sql = "INSERT INTO productos (nombre, descripcion, precio)
                VALUES (?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssd",
            $nombre,
            $descripcion,
            $precio
        );

        $stmt->execute();
        $stmt->close();
    }

    // Método para eliminar un producto
    public function eliminar_producto($id_producto) {

        $sql = "DELETE FROM productos
                WHERE id_producto = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "i",
            $id_producto
        );

        $stmt->execute();
        $stmt->close();
    }

    // Método para listar los productos
    public function listar_producto() {

        $sql = "SELECT * FROM productos";

        $resultado = $this->conexion->query($sql);

        return $resultado;
    }
}

?>