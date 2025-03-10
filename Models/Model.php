<?php

    require_once __DIR__ . '/../Config/BdConection.php';

    class Model {
        private $conexion;

        public function __construct() {
            $this->conexion = BdConection::getConnection();
        }

        public function obtenerClientes() {
            $sql = "SELECT * FROM cliente";
            $resultado = $this->conexion->query($sql);
            return $resultado ? $resultado->fetch_all(MYSQLI_ASSOC) : [];
        }

        public function insertarCliente($nombre, $correo, $telefono, $direccion, $contrasena) {
            // Verificar longitud de la contraseña
            if (strlen($contrasena) > 60) {
                die("Error: La contraseña encriptada es demasiado larga.");
            }

            $sql = "INSERT INTO cliente (nombre, correo, telefono, direccion, contrasena) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conexion->prepare($sql);
            if (!$stmt) {
                die("Error en la preparación de la consulta: " . $this->conexion->error);
            }

            $stmt->bind_param("sssss", $nombre, $correo, $telefono, $direccion, $contrasena);
            $resultado = $stmt->execute();

            $stmt->close(); // Liberar la consulta
            return $resultado;
        }

        public function obtenerClientePorId($id) {
            $sql = "SELECT * FROM cliente WHERE id = ?";
            $stmt = $this->conexion->prepare($sql);
            if (!$stmt) {
                die("Error en la preparación de la consulta: " . $this->conexion->error);
            }

            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();

            $cliente = $resultado->fetch_assoc();
            $stmt->close();

            return $cliente;
        }
    }
?>
