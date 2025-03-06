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
        </nav>
    </header>
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
    <script src="<?php echo JS_URL; ?>/Principal.js"></script>
</body>
</html>
