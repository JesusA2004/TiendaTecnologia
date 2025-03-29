<?php 
    require_once __DIR__ . '/Config/Routes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberStore</title>
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Principal.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>/Responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

    <a href="#" id="btn-subir">
    <img src="https://img.icons8.com/ios-filled/50/ffffff/up--v1.png" alt="Scroll Up">
    </a>

<body>

    <header>
        <!-- Logo on the left -->
        <img 
            src="<?php echo BASE_URL; ?>/Public/Resources/logo.png" 
            width="150" 
            alt="CyberStore Logo" 
            class="logo"
        >

        <!-- Hamburger button (hidden on desktop, visible on mobile) -->
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation -->
        <nav>
            <div class="menu-principal">
                <a href="#inicio" class="menu-item">Home</a>
                <a href="#nosotros" class="menu-item">About Us</a>
                <a href="#productos" class="menu-item">Products</a>
                
                <a href="#faq" class="menu-item">
                    FAQ  
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="FAQ Icon" class="faq-icono">
                </a>

                <a href="#contacto" class="menu-item">Contact</a>
                
                <!-- Simplified dropdown menu -->
                <div class="menu-desplegable">
                    <span class="menu-item">More options ▼</span>
                    <div class="desplegable-contenido">
                        <a href="index.php" id="cambiar-idioma">Change to Spanish</a>
                        <a href="https://lesgolfclub.netlify.app" id="mario-link">Mario's Team</a>
                        <a href="Views/quejasE.php" id="quejas">Complaints</a>
                    </div>
                </div>

                <!-- User icon -->
                <img 
                    id="icono-usuario" 
                    src="<?php echo BASE_URL; ?>/Public/Resources/registrar.png" 
                    alt="User"
                >
            </div>
        </nav>
    </header>

    <main>
        <section class="carrusel" id="inicio">
            <div class="carrusel-contenedor">
                <!-- Main image -->
                <img 
                    src="<?php echo BASE_URL; ?>/Public/Resources/carrusel1.jpg" 
                    alt="Product 1" 
                    class="carrusel-img activa"
                >
                
                <!-- White title on top -->
                <div class="carrusel-texto">
                    <h2>Welcome to CyberStore</h2>
                    <p>Your online technology store.</p>                 
                </div>
                
                <!-- Yellow box under the title -->
                <div id="promo-countdown">
                    <b>🚀 Limited time offer! 🛍️💥 </b>
                    <p>Save big, but hurry up:</p>
                    <span id="countdown"></span> ⏳ 
                    <p>Buy now!</p>
                </div>

                <!-- Other carousel images -->
                <img 
                    src="<?php echo BASE_URL; ?>/Public/Resources/carrusel2.jpg" 
                    alt="Product 2" 
                    class="carrusel-img"
                >
                <img 
                    src="<?php echo BASE_URL; ?>/Public/Resources/carrusel3.png" 
                    alt="Product 3" 
                    class="carrusel-img"
                >
            </div>
            <button class="carrusel-btn prev">&#10094;</button>
            <button class="carrusel-btn next">&#10095;</button>
        </section>

        <section id="nosotros" class="sobre-nosotros">
            <div class="card-sobre-nosotros">
                <h2>About Us</h2>
                <p align="justify">
                    At <strong>CyberStore</strong>, we are passionate about technology and innovation. Our goal is to offer you the best products at the best quality and price. We specialize in providing a safe and efficient shopping experience.
                </p>
                <p align="justify">
                    Founded in 2010, CyberStore has grown to become a benchmark in the technology world, offering laptops, tablets, refrigerators, and more. Our commitment is to our customers, ensuring exceptional service.
                </p>
                <div class="equipo">
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/mision.png" alt="CEO">
                        <h3>Mission</h3>
                        <p align="justify">
                            Our mission is to provide high-quality technology products that improve our customers' lives, offering innovative and accessible solutions, always with a focus on excellence and customer satisfaction.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/vision.png" alt="Designer">
                        <h3>Vision</h3>
                        <p align="justify">
                            We strive to be the leading online technology store, standing out by offering cutting-edge products and exceptional service, committed to sustainable development and the well-being of our customers.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/valores.png" alt="Tech">
                        <h3>Values</h3>
                        <ul>
                            <li><strong>Innovation:</strong> We are passionate about being at the forefront of technology.</li>
                            <li><strong>Commitment:</strong> We are dedicated to providing quality products.</li>
                            <li><strong>Responsibility:</strong> We act with social and environmental responsibility.</li>
                            <li><strong>Integrity:</strong> We operate in an ethical, honest, and transparent manner.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="categorias" id="productos">
            <div class="texto">
                <h2 class="traducible">Explore the Latest in Technology!</h2>
                <p align="justify">
                    Are you ready to upgrade your life? Discover products that combine style, performance, and functionality to make your everyday life extraordinary. Look no further—your next great purchase is here!
                </p>
            </div>
            <div class="categoria-container">
                <div class="categoria">
                    <div class="card-imagen">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/laptops.jpg" alt="Laptops">
                        <!-- Measurement block that will be displayed on hover -->
                        <div class="producto-medidas">
                            <p><strong>Dimensions:</strong> 35cm x 24cm x 2cm</p>
                            <p><strong>Weight:</strong> 1.8 kg</p>
                        </div>
                    </div>
                    <h3 class="traducible">Laptops</h3>
                    <p class="precio"><strong>From $10,999.00 MXN</strong></p>
                    <p class="traducible">
                        Experience power and portability in the palm of your hand. Our laptops are designed 
                        to accompany you every step of the way, from work to entertainment.
                    </p>
                </div>

                <div class="categoria">
                    <div class="card-imagen">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigeradores.jpg" alt="Refrigerators">
                        <!-- Measurement block that will be displayed on hover -->
                        <div class="producto-medidas">
                            <p><strong>Dimensions:</strong> 70cm x 60cm x 170cm</p>
                            <p><strong>Weight:</strong> 80 kg</p>
                        </div>
                    </div>    
                    <h3 class="traducible">Refrigerators</h3>
                    <p class="precio"><strong>From $8,999.00 MXN</strong></p>
                    <p class="traducible">
                        Keep your food fresh and organized with our next-generation refrigerators. 
                        Advanced technology ensures energy efficiency and an elegant design.
                    </p>
                </div>
                <div class="categoria">
                    <div class="card-imagen">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/tablets.png" alt="Tablets">
                        <!-- Measurement block that will be displayed on hover -->
                        <div class="producto-medidas">
                            <p><strong>Dimensions:</strong> 24cm x 17cm x 0.8cm</p>
                            <p><strong>Weight:</strong> 500 g</p>
                        </div>
                    </div>
                    <h3 class="traducible">Tablets</h3>
                    <p class="precio"><strong>From $5,999.00 MXN</strong></p>
                    <p class="traducible">
                        Discover the versatility that only a tablet can offer. Lightweight, fast, and with a high-quality screen, 
                        perfect for all your daily tasks.
                    </p>
                </div>
            </div>     
        </section>


        <section id="faq" class="preguntas-frecuentes">
            <div class="card-faq">
                <h2>Frequently Asked Questions  
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="FAQ Icon">
                </h2>
                
                <div class="pregunta">
                    <h3>1. How can I place an order?</h3>
                    <p>To place an order, simply browse through our product categories, choose the one you want, and add it to your cart. Then, follow the checkout process.</p>
                </div>

                <div class="pregunta">
                    <h3>2. How can I pay for my order?</h3>
                    <p>We accept payments via credit cards, debit cards, and bank transfers. We also offer payment options through PayPal.</p>
                </div>

                <div class="pregunta">
                    <h3>3. Do you ship internationally?</h3>
                    <p>Yes, we ship to several countries. You can check if your country is available during the checkout process.</p>
                </div>

                <div class="pregunta">
                    <h3>4. What is the delivery time for the products?</h3>
                    <p>Delivery time varies depending on your location. Generally, domestic shipments take between 3 and 7 business days.</p>
                </div>

                <div class="pregunta">
                    <h3>5. Can I return a product?</h3>
                    <p>Yes, we offer returns within 30 days of purchase. The product must be in its original, unused condition.</p>
                </div>

                <div class="pregunta">
                    <h3>6. How can I know if a product is available?</h3>
                    <p>On each product page, you can see if it is in stock. If the product is out of stock, you can sign up to receive a notification when it becomes available again.</p>
                </div>

                <div class="pregunta">
                    <h3>7. Do you offer warranties on the products?</h3>
                    <p>Yes, all our products come with the manufacturer's warranty. Please check the specific product policies on the details page.</p>
                </div>

                <div class="pregunta">
                    <h3>8. Can I exchange a product for another?</h3>
                    <p>Exchanges are possible within 30 days of purchase, as long as the product is in its original condition. For more details, contact us.</p>
                </div>

                <div class="pregunta">
                    <h3>9. How can I contact customer service?</h3>
                    <p>You can contact us through our website contact form or by email at support@cyberstore.com.</p>
                </div>

                <div class="pregunta">
                    <h3>10. How can I register on CyberStore?</h3>
                    <p>You can register by clicking on the user icon at the top right of the page and filling out the form with your personal information.</p>
                </div>
            </div>
        </section>

        <!-- Popup form -->
        <div id="formularioRegistro" class="modal">
            <div class="modal-contenido">
                <span class="cerrar" onclick="cerrarFormulario()">&times;</span>
                <h2>Register</h2>
                <p>Please enter your details.</p>
                <br>
                <form action="Controllers/Controller.php" method="POST">
                    <input type="text" name="nombre" placeholder="Full Name" required>
                    <input type="email" name="correo" placeholder="Email" required>
                    <input type="text" name="telefono" placeholder="Phone" required>
                    <input type="text" name="direccion" placeholder="Address" required>
                    <input type="password" name="contrasena" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>

    </main>

    <?php require_once __DIR__ . '/Includes/FooterEnglish.php'; ?>
    <script src="<?php echo JS_URL; ?>/Principal.js"></script>
    <script src="<?php echo JS_URL; ?>/Scroll.js"></script>

</body>
</html>
