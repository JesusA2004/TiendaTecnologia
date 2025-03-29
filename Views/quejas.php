<?php 
    require_once __DIR__ . '/../Config/Routes.php';

    require_once __DIR__ . '/../Controllers/ControllerQuejas.php';
    
    $controlador = new Controller();
    $quejas = $controlador->consultarQueja();
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Quejas y Sugerencias</title>

    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/quejas.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    
</head>
<body>
<header>
        <img href="#inicio" src="<?php echo BASE_URL; ?>/Public/Resources/Logo.png" width="150" alt="Logo CyberStore" class="logo">

        <!-- Botón hamburguesa -->
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav>
            <div class="menu-principal">

                <a href="../index.php#inicio" class="menu-item">Inicio</a>
                <a href="../index.php#nosotros" class="menu-item">Sobre nosotros</a>
                <a href="../index.php#productos" class="menu-item">Productos</a>
                
                <a href="../index.php#faq" class="menu-item">
                    Preguntas frecuentes  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="iconFaq" class="faq-icono">
                </a>

                <a href="../index.php#contacto" class="menu-item">Contacto</a>
                
                <!-- Menú desplegable simplificado -->
                <div class="menu-desplegable">
                    <span class="menu-item">Más opciones ▼</span>
                    <div class="desplegable-contenido">
                        <a href="#" id="modo-oscuro-toggle">Modo oscuro</a>
                        <a href="quejasE.php" id="cambiar-idioma">Cambiar a Ingles</a>
                        <a href="https://lesgolfclub.netlify.app" id="mario-link">Equipo de Mario</a>
                        <a href="#" id="quejas">Quejas</a>
                    </div>
                </div>

            </div>
        </nav>
    </header>

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

        <!-- Botón para mostrar la tabla de quejas -->
        <button onclick="mostrarTablaQuejas()">Mostrar Quejas</button>



        <!-- Tabla de quejas -->
        <div class="table-container">
            <table id="tablaQuejas" style="display: none;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Tipo</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($quejas)): ?>
                        <?php foreach ($quejas as $queja): ?>
                            <tr>
                                <td data-label="ID"><?php echo $queja['id']; ?></td>
                                <td data-label="Nombre"><?php echo $queja['nombre']; ?></td>
                                <td data-label="Correo"><?php echo $queja['correo']; ?></td>
                                <td data-label="Tipo"><?php echo $queja['tipo']; ?></td>
                                <td data-label="Mensaje"><?php echo $queja['mensaje']; ?></td>
                                <td data-label="Fecha"><?php echo $queja['fecha']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="6" style="text-align: center;">No hay quejas registradas.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>


    <!-- Script para mostrar/ocultar la tabla -->
    <script>
        function mostrarTablaQuejas() {
            var tabla = document.getElementById('tablaQuejas');
            
            // Verificar si la tabla está oculta o visible
            if (tabla.style.display === 'none' || tabla.style.display === '') {
                tabla.style.display = 'block'; // Mostrar tabla si está oculta
            } else {
                tabla.style.display = 'none'; // Ocultar tabla si está visible
            }
        }
    </script>

    <script src="<?php echo JS_URL; ?>/Quejas.js"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="kjnkkEfZx0"></script>

</body>
</html>