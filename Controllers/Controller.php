<?php
    require_once __DIR__ . '/../Models/Model.php';

    class Controller {

        private $modelo;

        public function __construct() {
            $this->modelo = new Model();
        }

        public function listarClientes() {
            return $this->modelo->obtenerClientes();
        }

        public function agregarCliente($nombre, $correo, $telefono, $direccion, $contrasena) {
            return $this->modelo->insertarCliente($nombre, $correo, $telefono, $direccion, $contrasena);
        }

        public function obtenerCliente($id) {
            return $this->modelo->obtenerClientePorId($id);
        }

    }
?>
