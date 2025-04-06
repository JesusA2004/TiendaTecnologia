<?php
    require_once __DIR__ . '/../Config/Routes.php';
    require_once __DIR__ . '/../Controllers/ControllerQuejas.php';

    
    $controlador = new Controller();
    $queja = null;
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $queja = $controlador->obtenerQuejaPorId($id);
    }
    
    if (!$queja) {
        echo "<script>alert('No se encontró la queja.'); window.location.href='index.php';</script>";
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Queja</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/quejas.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
</head>
<body>
    <div class="container">
        <h2>Actualizar Queja</h2>
        <form action="../Controllers/ControllerQuejas.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $queja['id']; ?>">
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($queja['nombre']); ?>" required>
            
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($queja['correo']); ?>" required>
            
            <label for="tipo">Tipo de mensaje:</label>
            <select id="tipo" name="tipo" required>
                <option value="queja" <?php echo ($queja['tipo'] == 'queja') ? 'selected' : ''; ?>>Queja</option>
                <option value="sugerencia" <?php echo ($queja['tipo'] == 'sugerencia') ? 'selected' : ''; ?>>Sugerencia</option>
                <option value="observacion" <?php echo ($queja['tipo'] == 'observacion') ? 'selected' : ''; ?>>Observación</option>
            </select>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required><?php echo htmlspecialchars($queja['mensaje']); ?></textarea>
            
            <button type="submit" name="actualizar">Actualizar</button>
        </form>
        <a href="quejas.php">Regresar</a>
    </div>
</body>
</html>