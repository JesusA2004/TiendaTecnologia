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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <h1>CyberStore</h1>

        <!-- Botón hamburguesa -->
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav>
            <div class="menu-principal">
                <input id="buscar" type="text" placeholder="Search for products or more..." class="busqueda-usuario">

                <a href="#inicio" class="menu-item">Home</a>
                <a href="#nosotros" class="menu-item">About Us</a>
                <a href="#productos" class="menu-item">Products</a>
                
                <a href="#faq" class="menu-item">
                    Frequently Asked Questions  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="iconFaq" class="faq-icono">
                </a>

                <a href="#contacto" class="menu-item">Contact</a>
                
                <!-- Menú desplegable simplificado -->
                <div class="menu-desplegable">
                    <span class="menu-item">More options ▼</span>
                    <div class="desplegable-contenido">
                        <a href="#" id="modo-oscuro-toggle">Dark mode</a>
                        <a href="index.php" id="cambiar-idioma">Change to Spanish</a>
                        <a href="URL_DE_MARIO" id="mario-link">Mario</a>
                    </div>
                </div>

                <img id="icono-usuario" src="<?php echo BASE_URL; ?>/Public/Resources/registrar.png" alt="User">
            </div>
        </nav>
    </header>

    <main>
        <section class="carrusel" id="inicio">
            <div class="carrusel-contenedor">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel1.jpg" alt="Product 1" class="carrusel-img activa">
                <div class="carrusel-texto">
                    <h2>Welcome to CyberStore</h2>
                    <p>Your online tech store.</p>
                </div>
                
                <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel2.jpg" alt="Product 2" class="carrusel-img">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel3.png" alt="Product 3" class="carrusel-img">
            </div>
            <button class="carrusel-btn prev">&#10094;</button>
            <button class="carrusel-btn next">&#10095;</button>
        </section>

        <section id="nosotros" class="sobre-nosotros">
            <div class="card-sobre-nosotros">
                <h2>About Us</h2>
                <p align="justify">
                    At <strong>CyberStore</strong>, we are passionate about technology and innovation. Our goal is to bring you the best products with the highest quality and price. We specialize in providing a safe and efficient shopping experience.
                </p>
                <p align="justify">
                    Founded in 2010, CyberStore has grown to become a benchmark in the technology world, offering laptops, tablets, refrigerators, and more. Our commitment is to our customers, ensuring exceptional service.
                </p>
                <div class="equipo">
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/mision.png" alt="CEO">
                        <h3>Mission</h3>
                        <p>
                            Our mission is to provide high-quality technology products that enhance our customers' lives, offering innovative and accessible solutions with a focus on excellence and customer satisfaction.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/vision.png" alt="Designer">
                        <h3>Vision</h3>
                        <p>
                            We strive to be the leading online technology store, distinguished by offering cutting-edge products and exceptional service, committed to sustainable development and the well-being of our customers.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/valores.png" alt="Tech">
                        <h3>Values</h3>
                        <ul>
                            <li><strong>Innovation:</strong> We are passionate about staying at the forefront of technology and offering the best to our customers.</li>
                            <li><strong>Commitment:</strong> We are committed to providing quality products and impeccable customer service.</li>
                            <li><strong>Responsibility:</strong> We act with social and environmental responsibility in all our operations.</li>
                            <li><strong>Integrity:</strong> We operate ethically, honestly, and transparently in all our relationships.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="categorias" id="productos">
            <div class="texto">
                <h2 class="traducible">Explore the latest in technology!</h2>
                <p class="traducible">Are you ready to upgrade your life? Discover products that combine style, performance, and functionality to make your everyday extraordinary. Look no further, your next great purchase is here!</p>
            </div>
            <div class="categoria-container">
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/laptops.jpg" alt="Laptops">
                    <h3 class="traducible">Laptops</h3>
                    <p class="traducible">Experience power and portability in the palm of your hand. Our laptops are designed to accompany you every step of the way, from work to entertainment, with performance that won’t disappoint you.</p>
                    <button class="traducible">See more</button>
                </div>
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigeradores.jpg" alt="Refrigerators">
                    <h3 class="traducible">Refrigerators</h3>
                    <p class="traducible">Keep your food fresh and organized with our state-of-the-art refrigerators. Advanced technology ensures energy efficiency, optimized space, and an elegant design for your home.</p>
                    <button class="traducible">See more</button>
                </div>
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/tablets.png" alt="Tablets">
                    <h3 class="traducible">Tablets</h3>
                    <p class="traducible">Discover the versatility that only a tablet can offer. Lightweight, fast, and with a superior display, perfect for all your daily tasks, whether at home or on the go.</p>
                    <button class="traducible">See more</button>
                </div>
            </div>     
        </section>

        <section id="faq" class="preguntas-frecuentes">
            <div class="card-faq">
                <h2>Frequently Asked Questions  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="iconFaq"></h2>
                
                
                <div class="pregunta">
                    <h3>1. How can I place an order?</h3>
                    <p>To place an order, simply browse our product categories, choose the one you want, and add it to your cart. Then, follow the checkout process to complete your purchase.</p>
                </div>

                <div class="pregunta">
                    <h3>2. How can I pay for my order?</h3>
                    <p>We accept payments via credit cards, debit cards, and bank transfers. We also offer payment options through PayPal.</p>
                </div>

                <div class="pregunta">
                    <h3>3. Do you offer international shipping?</h3>
                    <p>Yes, we ship to several countries. You can check if your country is available during the checkout process.</p>
                </div>

                <div class="pregunta">
                    <h3>4. What is the delivery time for products?</h3>
                    <p>Delivery time varies depending on your location. Generally, domestic shipments take between 3 and 7 business days.</p>
                </div>

                <div class="pregunta">
                    <h3>5. Can I return a product?</h3>
                    <p>Yes, we offer returns within 30 days of purchase. The product must be in its original condition and unused.</p>
                </div>

                <div class="pregunta">
                    <h3>6. How can I tell if a product is available?</h3>
                    <p>On each product page, you can see if it is in stock. If the product is sold out, you can sign up to receive a notification when it becomes available again.</p>
                </div>

                <div class="pregunta">
                    <h3>7. Do your products come with a warranty?</h3>
                    <p>Yes, all our products come with the manufacturer's warranty. Check the specific product policies on the details page.</p>
                </div>

                <div class="pregunta">
                    <h3>8. Can I exchange a product for another?</h3>
                    <p>Exchanges are possible within 30 days of purchase, provided the product is in its original condition. For more details, contact our customer service.</p>
                </div>

                <div class="pregunta">
                    <h3>9. How can I contact customer service?</h3>
                    <p>You can contact us through our contact form on the website or by email at support@cyberstore.com.</p>
                </div>

                <div class="pregunta">
                    <h3>10. How can I register at CyberStore?</h3>
                    <p>You can register by clicking on the user icon in the top right corner of the page and filling out the form with your personal information.</p>
                </div>

            </div>
        </section>


        <!-- Formulario emergente -->
        <div id="formularioRegistro" class="modal">
            <div class="modal-contenido">
                <span class="cerrar" onclick="cerrarFormulario()">&times;</span>
                <h2>Register</h2>
                <p>Please enter your information.</p>
                <br>
                <form action="Controllers/Controller.php" method="POST">
                    <input type="text" name="nombre" placeholder="Full Name" required>
                    <input type="email" name="correo" placeholder="Email Address" required>
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

</body>
</html>
