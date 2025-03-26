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
        // Verificar que los campos no estén vacíos
        if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["telefono"]) || 
            empty($_POST["direccion"]) || empty($_POST["contrasena"])) {
            echo "<script>alert('Todos los campos son obligatorios.'); window.history.back();</script>";
            exit;
        }

        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);
        $direccion = trim($_POST["direccion"]);
        $contrasena = trim($_POST["contrasena"]); // Ahora la contraseña se almacena tal cual

        $controlador = new Controller();
        $resultado = $controlador->agregarCliente($nombre, $correo, $telefono, $direccion, $contrasena);

        if ($resultado) {
            echo "<script>alert('Registro exitoso'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Error al registrar'); window.history.back();</script>";
        }
    }

   
?>
