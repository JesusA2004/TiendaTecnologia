<?php 
    require_once __DIR__ . '/../Config/Routes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/quejas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Quejas y Sugerencias</title>
</head>
<body>
    <div class="container">
        <h2>Envíanos tus comentarios</h2>
        <form id="formQuejas" action="../Controllers/ControllerQuejas.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" required>

            <label for="tipo">Tipo de mensaje:</label>
            <select id="tipo" name="tipo" required>
                <option value="queja">Queja</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="observacion">Observación</option>
            </select>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
