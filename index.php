<?php
    require_once __DIR__ . '/Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberStore</title>
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
</head>
<body>
    <header>
        <h1>CyberStore</h1>
        <nav>
            <input type="text" placeholder="Buscar productos y más...">
            <img id="icono-usuario" src="<?php echo BASE_URL; ?>/Public/Resources/user.png" alt="Usuario" width="40px" height="40px">
        </nav>
    </header>

     <!-- Formulario emergente -->
     <div id="formularioRegistro" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" onclick="cerrarFormulario()">&times;</span>
            <h2>Registrar Cliente</h2>
            <form action="Controllers/Controller.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
                <input type="text" name="telefono" placeholder="Teléfono" required>
                <input type="text" name="direccion" placeholder="Dirección" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>

    <main>
        <section class="banner">
            <img src="<?php echo BASE_URL; ?>/Public/Resources/banner.jpg" alt="Promo Xbox">
        </section>
        <section class="categorias">
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/Laptop.png" alt="Laptops">
                <p>Laptops</p>
                <button>Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/tablet.jpg" alt="Tablets">
                <p>Tablets</p>
                <button>Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigerador.jpg" alt="Refrigeradores">
                <p>Refrigeradores</p>
                <button>Ver más</button>
            </div>
        </section>
    </main>


    <?php require_once __DIR__ . '/Includes/Footer.php'; ?>
    <script src="<?php echo JS_URL; ?>/login.js"></script>

    <script>
        document.getElementById("icono-usuario").addEventListener("click", function () {
            document.getElementById("formularioRegistro").style.display = "block";
        });

        function cerrarFormulario() {
            document.getElementById("formularioRegistro").style.display = "none";
        }
    </script>
</body>
</html>
