<?php

    require_once __DIR__ . '/../Config/BdConection.php';

    class ModelQuejas {
        private $conexion;

        public function __construct() {
            $this->conexion = BdConection::getConnection();
        }

        // Método para insertar una queja/sugerencia/observación
        public function insertarQueja($nombre, $correo, $tipo, $mensaje) {
            $stmt = $this->conexion->prepare("INSERT INTO quejas (nombre, correo, tipo, mensaje) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nombre, $correo, $tipo, $mensaje);
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
        }

        public function obtenerQuejas() {
            $query = "SELECT id, nombre, correo, tipo, mensaje, fecha FROM quejas ORDER BY fecha DESC";
        
            // Preparar la consulta
            if ($stmt = $this->conexion->prepare($query)) {
        
                // Ejecutar la consulta
                $stmt->execute();
        
                // Obtener el resultado de la consulta
                $result = $stmt->get_result();
        
                // Crear un arreglo para almacenar las quejas
                $quejas = [];
        
                // Recorrer los resultados y agregar las quejas al arreglo
                while ($row = $result->fetch_assoc()) {
                    $quejas[] = $row;
                }
        
                // Cerrar la declaración
                $stmt->close();
        
                // Retornar el arreglo con las quejas
                return $quejas;
            } else {
                // Si la consulta no se preparó correctamente, devolver un error
                die("Error al preparar la consulta: " . $this->conexion->error);
            }
        } 

        public function getQuejaPorId($id) {
            $sql = "SELECT * FROM quejas WHERE id = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            
            if ($resultado->num_rows > 0) {
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
        }
        
        public function actualizarQueja($id, $nombre, $correo, $tipo, $mensaje) {
            // Preparar la consulta SQL con MySQLi
            $sql = "UPDATE quejas SET nombre = ?, correo = ?, tipo = ?, mensaje = ? WHERE id = ?";
            $stmt = $this->conexion->prepare($sql);
            
            // Vincular los parámetros
            $stmt->bind_param("ssssi", $nombre, $correo, $tipo, $mensaje, $id);
            
            // Ejecutar la consulta y devolver el resultado (true o false)
            return $stmt->execute();
        }
        
        public function borrarQueja($id) {
            $sql = "DELETE FROM quejas WHERE id = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param("i", $id);
        
            return $stmt->execute();
        }
        
        
    }
?>
