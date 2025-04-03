<?php

    require_once __DIR__ . '/../Models/ModelQuejas.php';

    class Controller {

        private $modelo;

        public function __construct() {
            $this->modelo = new ModelQuejas();
        }

        // Method to insert complaints
        public function agregarQueja($nombre, $correo, $tipo, $mensaje) {
            return $this->modelo->insertarQueja($nombre, $correo, $tipo, $mensaje);
        }

        // Method to retrieve complaints
        public function consultarQueja() {
            // Get complaints from the model
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
        // Check if a complaint deletion is requested
        if (isset($_POST["eliminar"]) && isset($_POST["id"])) {
            $controlador = new Controller();
            $id = intval($_POST["id"]);
            
            $resultado = $controlador->eliminarQueja($id);
            
            if ($resultado) {
                echo "Complaint successfully deleted!";
            } else {
                echo "Error deleting the complaint.";
            }
            exit;
        }
    
        // For inserting or updating, all fields must be present
        if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["tipo"]) || empty($_POST["mensaje"])) {
            echo "<script>alert('All fields are required.'); window.history.back();</script>";
            exit;
        }
    
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $tipo = trim($_POST["tipo"]);
        $mensaje = trim($_POST["mensaje"]);
        $controlador = new Controller();
    
        // If an ID is sent, the complaint is being updated
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $id = intval($_POST["id"]);
            $resultado = $controlador->editarQueja($id, $nombre, $correo, $tipo, $mensaje);
    
            if ($resultado) {
                echo "<script>alert('Complaint successfully updated!'); window.location.href='../Views/quejasE.php';</script>";
            } else {
                echo "<script>alert('Error updating the complaint.'); window.history.back();</script>";
            }
        } else {
            // New insertion
            $resultado = $controlador->agregarQueja($nombre, $correo, $tipo, $mensaje);
    
            if ($resultado) {
                echo "<script>alert('Message sent successfully!'); window.location.href='../Views/quejasE.php';</script>";
            } else {
                echo "<script>alert('Error sending the message.'); window.history.back();</script>";
            }
        }
    }
    
?>
