<?php

    require_once __DIR__ . '/../Config/BdConection.php';

    class ModelQuejas {
        private $conexion;

        public function __construct() {
            $this->conexion = BdConection::getConnection();
        }

        // Método para insertar una queja/sugerencia/observación
        public function insertarQueja($nombre, $correo, $tipo, $mensaje) {
            $stmt = $this->conexion->prepare("INSERT INTO quejas (nombre, correo, tipo, mensaje) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nombre, $correo, $tipo, $mensaje);
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
        }
    }
?>
