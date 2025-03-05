<?php
    require_once __DIR__ . '/../Config/BdConnection.php';

    class Model {
        private $conexion;

        public function __construct() {
            $this->conexion = BdConnection::getConnection();
        }

        public function obtenerClientes() {
            $sql = "SELECT * FROM cliente";
            $resultado = $this->conexion->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function insertarCliente($nombre, $correo, $telefono, $direccion, $contrasena) {
            $sql = "INSERT INTO cliente (nombre, correo, telefono, direccion, contrasena) 
                    VALUES ('$nombre', '$correo', '$telefono', '$direccion', '$contrasena')";
            return $this->conexion->query($sql);
        }

        public function obtenerClientePorId($id) {
            $sql = "SELECT * FROM cliente WHERE id = $id";
            $resultado = $this->conexion->query($sql);
            return $resultado->fetch_assoc();
        }
        
    }

?>
