<?php

    require_once __DIR__ . '/../Models/ModelQuejas.php';

    class Controller {

        private $modelo;

        public function __construct() {
            $this->modelo = new ModelQuejas();
        }

        // Método para insertar quejas
        public function agregarQueja($nombre, $correo, $tipo, $mensaje) {
            return $this->modelo->insertarQueja($nombre, $correo, $tipo, $mensaje);
        }

        // Método para consultar las quejas
        public function consultarQueja() {
            // Obtener las quejas desde el modelo
            $quejas = $this->modelo->obtenerQuejas();
            return $quejas;
        }
        
    }

    // Manejo del formulario de quejas
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar que los campos no estén vacíos
        if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["tipo"]) || empty($_POST["mensaje"])) {
            echo "<script>alert('Todos los campos son obligatorios.'); window.history.back();</script>";
            exit;
        }

        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $tipo = trim($_POST["tipo"]);
        $mensaje = trim($_POST["mensaje"]);

        $controlador = new Controller();
        $resultado = $controlador->agregarQueja($nombre, $correo, $tipo, $mensaje);

        if ($resultado) {
            echo "<script>alert('¡Mensaje enviado con éxito!'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Error al enviar el mensaje.'); window.history.back();</script>";
        }
    }
    

   
?>