<?php 
    require_once __DIR__ . '/../Config/Routes.php';

    require_once __DIR__ . '/../Controllers/ControllerQuejasE.php';
    
    $controlador = new Controller();
    $quejas = $controlador->consultarQueja();
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints and Suggestions Panel</title>

    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/quejas.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>

<body>
<header>
        <img href="#inicio" src="<?php echo BASE_URL; ?>/Public/Resources/logo.png" width="150" alt="CyberStore Logo" class="logo">

        <!-- Hamburger button -->
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav>
            <div class="menu-principal">

                <a href="../indexEnglish.php#inicio" class="menu-item">Home</a>
                <a href="../indexEnglish.php#nosotros" class="menu-item">About Us</a>
                <a href="../indexEnglish.php#productos" class="menu-item">Products</a>
                
                <a href="../indexEnglish.php#faq" class="menu-item">
                    Frequently Asked Questions  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="FAQ Icon" class="faq-icono">
                </a>

                <a href="../indexEnglish.php#contacto" class="menu-item">Contact</a>
                
                <!-- Simplified dropdown menu -->
                <div class="menu-desplegable">
                    <span class="menu-item">More options ▼</span>
                    <div class="desplegable-contenido">
                        <a href="#" id="modo-oscuro-toggle">Dark mode</a>
                        <a href="quejas.php" id="cambiar-idioma">Change to Spanish</a>
                        <a href="https://lesgolfclub.netlify.app" id="mario-link">Mario's Team</a>
                        <a href="#" id="quejas">Complaints</a>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <div class="container">
        <h2>Send us your feedback</h2>
        <form id="formQuejas" action="../Controllers/ControllerQuejasE.php" method="POST">
            <label for="nombre">Name:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Your name" required>

            <label for="correo">Email:</label>
            <input type="email" id="correo" name="correo" placeholder="email@example.com" required>

            <label for="tipo">Message Type:</label>
            <select id="tipo" name="tipo" required>
                <option value="queja">Complaint</option>
                <option value="sugerencia">Suggestion</option>
                <option value="observacion">Observation</option>
            </select>

            <label for="mensaje">Message:</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Write your message here..." required></textarea>

            <button type="submit">Send</button>
        </form>

        <!-- Button to show the complaints table -->
        <button onclick="mostrarTablaQuejas()">Show Complaints</button>

        <!-- Complaints table -->
        <div class="table-container">
            <table id="tablaQuejas" style="display: none;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($quejas)): ?>
                        <?php foreach ($quejas as $queja): ?>
                            <tr>
                                <td data-label="ID"><?php echo $queja['id']; ?></td>
                                <td data-label="Name"><?php echo $queja['nombre']; ?></td>
                                <td data-label="Email"><?php echo $queja['correo']; ?></td>
                                <td data-label="Type"><?php echo $queja['tipo']; ?></td>
                                <td data-label="Message"><?php echo $queja['mensaje']; ?></td>
                                <td data-label="Date"><?php echo $queja['fecha']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="6" style="text-align: center;">No complaints registered.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    <!-- Script to show/hide the table -->
    <script>
        function mostrarTablaQuejas() {
            var tabla = document.getElementById('tablaQuejas');
            
            // Check if the table is hidden or visible
            if (tabla.style.display === 'none' || tabla.style.display === '') {
                tabla.style.display = 'block'; // Show table if hidden
            } else {
                tabla.style.display = 'none'; // Hide table if visible
            }
        }
    </script>

    <script src="<?php echo JS_URL; ?>/Quejas.js"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="kjnkkEfZx0"></script>

</body>
</html>
