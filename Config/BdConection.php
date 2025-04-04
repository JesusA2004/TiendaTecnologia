<?php
    class BdConection {
        private static $conn;

        public static function getConnection() {
            if (self::$conn === null) {
                // 1. Elimina el mensaje de éxito (interfiere con redirecciones)
                self::$conn = mysqli_connect(
                    'mysql.webcindario.com', 
                    'cyberstore1',
                    'CarG2401',
                    'cyberstore1'
                );

                // 2. Verifica errores de conexión
                if (!self::$conn) {
                    // Registra el error en logs (no en pantalla)
                    error_log("Error de conexión: " . mysqli_connect_error());
                    return false;
                }
            }
            return self::$conn;
        }
    }
?>