<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    //Datos de la conexión
    $conn = mysqli_connect(
        'localhost',
        'root',     
        '',        
        'bdTienda' 
    );

    if (!$conn) {
        // Guardamos el error en la sesión
        $_SESSION["mensaje_error"] = "Error al conectar con la base de datos: " . mysqli_connect_error();
        // Redirigir al usuario a la página de login
        header("Location: ../index.php");
        exit;
    }
?>