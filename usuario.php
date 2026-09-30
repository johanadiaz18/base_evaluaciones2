<?php

class usuario {

    private $email;
    private $contrasena;
    private $conexion;

    // Constructor
    public function __construct() {

        include("conexion.php");

        $this->conexion = $conexion;
    }

    // Método para registrar un usuario
    public function registrar_usuario($email, $contrasena) {

        $this->email = $email;

        // Encriptamos la contraseña
        $this->contrasena = password_hash(
            $contrasena,
            PASSWORD_DEFAULT
        );

        $sql = "INSERT INTO registro (email, contrasena)
                VALUES (?, ?)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ss",
            $this->email,
            $this->contrasena
        );

        $resultado = $stmt->execute();

        $stmt->close();

        return $resultado;
    }

    // Método para verificar el ingreso del usuario
    public function verificar_usuario($email, $contrasena) {

        $sql = "SELECT contrasena FROM registro
                WHERE email = ?";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "s",
            $email
        );

        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {

            $usuario = $resultado->fetch_assoc();

            if (password_verify(
                $contrasena,
                $usuario["contrasena"]
            )) {

                $stmt->close();
                return true;
            }
        }

        $stmt->close();

        return false;
    }
}

?>