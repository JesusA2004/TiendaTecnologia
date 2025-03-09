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
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function insertarCliente($nombre, $correo, $telefono, $direccion, $contrasena) {
            $sql = "INSERT INTO cliente (nombre, correo, telefono, direccion, contrasena) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param("sssss", $nombre, $correo, $telefono, $direccion, $contrasena);
            return $stmt->execute();
        }

        public function obtenerClientePorId($id) {
            $sql = "SELECT * FROM cliente WHERE id = $id";
            $resultado = $this->conexion->query($sql);
            return $resultado->fetch_assoc();
        }
    }
?>