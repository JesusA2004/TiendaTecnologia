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

    // Manejo del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $contrasena = password_hash($_POST["contrasena"], PASSWORD_BCRYPT); // Encripta la contraseña

        $controlador = new Controller();
        $resultado = $controlador->agregarCliente($nombre, $correo, $telefono, $direccion, $contrasena);

        if ($resultado) {
            echo "<script>alert('Registro exitoso'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Error al registrar'); window.history.back();</script>";
        }
    }
?>