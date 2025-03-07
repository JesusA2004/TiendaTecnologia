<?php
class BdConection {
    private static $conn;

    // Método estático para obtener la conexión a la base de datos
    public static function getConnection() {
        if (self::$conn === null) {
            // Datos de la conexión
            self::$conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'bdTienda'
            );

            // Comprobar si la conexión fue exitosa
            if (!self::$conn) {
                // Guardamos el error en la sesión
                $_SESSION["mensaje_error"] = "Error al conectar con la base de datos: " . mysqli_connect_error();
                // Redirigir al usuario a la página de login
                header("Location: ../index.php");
                exit;
            }
        }

        return self::$conn;
    }
}
?>
