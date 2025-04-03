<?php
    require_once __DIR__ . '/../Config/Routes.php';
    require_once __DIR__ . '/../Controllers/ControllerQuejasE.php';

    $controller = new Controller();
    $complaint = null;
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $complaint = $controller->obtenerQuejaPorId($id);
    }
    
    if (!$complaint) {
        echo "<script>alert('Complaint not found.'); window.location.href='index.php';</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Complaint</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/quejas.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
</head>
<body>
    <div class="container">
        <h2>Update Complaint</h2>
        <form action="../Controllers/ControllerQuejasE.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $complaint['id']; ?>">
            
            <label for="nombre">Name:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($complaint['nombre']); ?>" required>
            
            <label for="correo">Email:</label>
            <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($complaint['correo']); ?>" required>
            
            <label for="tipo">Message Type:</label>
            <select id="tipo" name="tipo" required>
                <option value="queja" <?php echo ($complaint['tipo'] == 'queja') ? 'selected' : ''; ?>>Complaint</option>
                <option value="sugerencia" <?php echo ($complaint['tipo'] == 'sugerencia') ? 'selected' : ''; ?>>Suggestion</option>
                <option value="observacion" <?php echo ($complaint['tipo'] == 'observacion') ? 'selected' : ''; ?>>Observation</option>
            </select>
            
            <label for="mensaje">Message:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required><?php echo htmlspecialchars($complaint['mensaje']); ?></textarea>
            
            <button type="submit" name="actualizar">Update</button>
        </form>
        <a href="quejasE.php">Go Back</a>
    </div>
</body>
</html>
