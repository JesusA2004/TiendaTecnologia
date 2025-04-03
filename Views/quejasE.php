<?php 
    require_once __DIR__ . '/../Config/Routes.php';
    require_once __DIR__ . '/../Controllers/ControllerQuejas.php';
    
    $controller = new Controller();
    $complaints = $controller->consultarQueja();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
    <img href="#home" src="<?php echo BASE_URL; ?>/Public/Resources/logo.png" width="150" alt="CyberStore Logo" class="logo">

    <!-- Hamburger Button -->
    <button class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav>
        <div class="menu-principal">
            <a href="../index.php#home" class="menu-item">Home</a>
            <a href="../index.php#about" class="menu-item">About Us</a>
            <a href="../index.php#products" class="menu-item">Products</a>
            <a href="../index.php#faq" class="menu-item">
                FAQ  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="FAQ Icon" class="faq-icono">
            </a>
            <a href="../index.php#contact" class="menu-item">Contact</a>
            
            <!-- Simplified Dropdown Menu -->
            <div class="menu-desplegable">
                <span class="menu-item">More options ▼</span>
                <div class="desplegable-contenido">
                    <a href="#" id="modo-oscuro-toggle">Dark Mode</a>
                    <a href="quejas.php" id="cambiar-idioma">Switch to Spanish</a>
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

        <label for="tipo">Message type:</label>
        <select id="tipo" name="tipo" required>
            <option value="queja">Complaint</option>
            <option value="sugerencia">Suggestion</option>
            <option value="observacion">Observation</option>
        </select>

        <label for="mensaje">Message:</label>
        <textarea id="mensaje" name="mensaje" rows="5" placeholder="Write your message here..." required></textarea>

        <button type="submit">Submit</button>
    </form>

    <!-- Button to show the complaints table -->
    <button onclick="mostrarTablaQuejas()">Show Complaints</button>

    <!-- Complaints Table -->
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($complaints)): ?>
                    <?php foreach ($complaints as $complaint): ?>
                        <tr>
                            <td data-label="ID"><?php echo $complaint['id']; ?></td>
                            <td data-label="Name"><?php echo $complaint['nombre']; ?></td>
                            <td data-label="Email"><?php echo $complaint['correo']; ?></td>
                            <td data-label="Type"><?php echo $complaint['tipo']; ?></td>
                            <td data-label="Message"><?php echo $complaint['mensaje']; ?></td>
                            <td data-label="Date"><?php echo $complaint['fecha']; ?></td>
                            <td>
                                <button onclick="window.location.href='actualizarQuejaE.php?id=<?= $complaint['id'] ?>'" class="btn-editar">Edit</button>
                                <button onclick="eliminarQueja(<?php echo $complaint['id']; ?>)">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7" style="text-align: center;">No complaints registered.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>              

    <!-- Script to toggle the complaints table -->
    <script>
        function mostrarTablaQuejas() {
            var tabla = document.getElementById('tablaQuejas');
            
            // Check if the table is hidden or visible
            if (tabla.style.display === 'none' || tabla.style.display === '') {
                tabla.style.display = 'block'; // Show the table if hidden
            } else {
                tabla.style.display = 'none'; // Hide the table if visible
            }
        } 

        function eliminarQueja(id) {
            if (confirm("Are you sure you want to delete this complaint?")) {
                fetch('../Controllers/ControllerQuejas.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'eliminar=1&id=' + id
                })
                .then(response => response.text())
                .then(data => {
                    alert(data);  // Show server response
                    location.reload();  // Reload the page to update the table
                })
                .catch(error => console.error('Error:', error));
            }
        }
    </script>

    <!-- Modal for editing -->
    <div id="editarModal" style="display: none;">
        <form action="actualizarQuejaE.php" method="POST">
            <input type="hidden" name="id" id="editId">
            <label>Name:</label>
            <input type="text" name="nombre" id="editNombre" required><br>
            <label>Email:</label>
            <input type="email" name="correo" id="editCorreo" required><br>
            <label>Type:</label>
            <input type="text" name="tipo" id="editTipo" required><br>
            <label>Message:</label>
            <textarea name="mensaje" id="editMensaje" required></textarea><br>
            <button type="submit" name="editarQueja">Save changes</button>
        </form>
    </div>

    <script src="<?php echo JS_URL; ?>/Quejas.js"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="kjnkkEfZx0"></script>
</body>
</html>
