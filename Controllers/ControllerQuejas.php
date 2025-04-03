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

        public function obtenerQuejaPorId($id) {
            return $this->modelo->getQuejaPorId($id);
        }
        
        public function editarQueja($id, $nombre, $correo, $tipo, $mensaje) {
            return $this->modelo->actualizarQueja($id, $nombre, $correo, $tipo, $mensaje);
        } 

        public function eliminarQueja($id) {
            return $this->modelo->borrarQueja($id);
        }
        
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se solicita la eliminación de una queja
        if (isset($_POST["eliminar"]) && isset($_POST["id"])) {
            $controlador = new Controller();
            $id = intval($_POST["id"]);
            
            $resultado = $controlador->eliminarQueja($id);
            
            if ($resultado) {
                echo "¡Queja eliminada con éxito!";
            } else {
                echo "Error al eliminar la queja.";
            }
            exit;
        }
    
        // Para insertar o actualizar se requiere que todos los campos estén presentes
        if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["tipo"]) || empty($_POST["mensaje"])) {
            echo "<script>alert('Todos los campos son obligatorios.'); window.history.back();</script>";
            exit;
        }
    
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $tipo = trim($_POST["tipo"]);
        $mensaje = trim($_POST["mensaje"]);
        $controlador = new Controller();
    
        // Si se envía un ID se está actualizando la queja
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $id = intval($_POST["id"]);
            $resultado = $controlador->editarQueja($id, $nombre, $correo, $tipo, $mensaje);
    
            if ($resultado) {
                echo "<script>alert('¡Queja actualizada con éxito!'); window.location.href='../Views/quejas.php';</script>";
            } else {
                echo "<script>alert('Error al actualizar la queja.'); window.history.back();</script>";
            }
        } else {
            // Nueva inserción
            $resultado = $controlador->agregarQueja($nombre, $correo, $tipo, $mensaje);
    
            if ($resultado) {
                echo "<script>alert('¡Mensaje enviado con éxito!'); window.location.href='../Views/quejas.php';</script>";
            } else {
                echo "<script>alert('Error al enviar el mensaje.'); window.history.back();</script>";
            }
        }
    }
    
?>