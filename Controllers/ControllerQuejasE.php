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
}

// Handling the complaint form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields are empty
    if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["tipo"]) || empty($_POST["mensaje"])) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit;
    }

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $tipo = trim($_POST["tipo"]);
    $mensaje = trim($_POST["mensaje"]);

    $controlador = new Controller();
    $resultado = $controlador->agregarQueja($nombre, $correo, $tipo, $mensaje);

    if ($resultado) {
        echo "<script>alert('Message sent successfully!'); window.location.href='../indexEnglish.php';</script>";
    } else {
        echo "<script>alert('Error sending message.'); window.history.back();</script>";
    }
}

?>
