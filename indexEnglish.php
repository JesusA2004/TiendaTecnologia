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
        <nav>
            <div class="menu-principal">
                <input id="buscar" type="text" placeholder="Search products or more..." class="busqueda-usuario">

                <a href="#inicio" class="menu-item">Home</a>
                <a href="#nosotros" class="menu-item">About Us</a>
                <a href="#productos" class="menu-item">Products</a>
                
                <a href="#faq" class="menu-item">
                    FAQ  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="iconFaq" class="faq-icono">
                </a>

                <a href="#contacto" class="menu-item">Contact</a>
                
                <!-- Simplified dropdown menu -->
                <div class="menu-desplegable">
                    <span class="menu-item">More Options ▼</span>
                    <div class="desplegable-contenido">
                        <a href="#" id="modo-oscuro-toggle">Dark Mode</a>
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
                    <p>Your online technology store.</p>
                </div>
                
                <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel2.jpg" alt="Product 2" class="carrusel-img">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel3.png" alt="Product 3" class="carrusel-img">
            </div>
            <button class="carrusel-btn prev" onclick="cambiarImagen(-1)">&#10094;</button>
            <button class="carrusel-btn next" onclick="cambiarImagen(1)">&#10095;</button>
        </section>

        <section id="nosotros" class="sobre-nosotros">
            <div class="card-sobre-nosotros">
                <h2>About Us</h2>
                <p align="justify">
                    At <strong>CyberStore</strong>, we are passionate about technology and innovation. Our goal is to 
                    provide you with the best products with the highest quality and price. We specialize in offering a 
                    safe and efficient shopping experience.
                </p>
                <p align="justify">
                    Founded in 2010, CyberStore has grown to become a reference in the technology world, 
                    offering laptops, tablets, refrigerators, and more. Our commitment is to our customers, 
                    ensuring we provide exceptional service.
                </p>
                <div class="equipo">
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/mision.png" alt="CEO">
                        <h3>Mission</h3>
                        <p>
                            Our mission is to provide high-quality technological products that improve our customers' lives, 
                            offering innovative and accessible solutions, always with a focus on excellence and customer satisfaction.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/vision.png" alt="Designer">
                        <h3>Vision</h3>
                        <p>
                            We strive to be the leading online technology store, standing out for offering cutting-edge products 
                            and exceptional service, committed to sustainable development and our customers' well-being.
                        </p>
                    </div>
                    <div class="miembro">
                        <img src="<?php echo BASE_URL; ?>/Public/Resources/valores.png" alt="Tech">
                        <h3>Values</h3>
                        <ul>
                            <li><strong>Innovation:</strong> We are passionate about being at the forefront of technology and offering the best to our customers.</li>
                            <li><strong>Commitment:</strong> We commit to providing quality products and impeccable customer service.</li>
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
                <p class="traducible">Ready to upgrade your life? Discover products that combine style, performance, and functionality to make your daily life extraordinary. Look no further, your next great purchase is here!</p>
            </div>
            <div class="categoria-container">
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/laptops.jpg" alt="Laptops">
                    <h3 class="traducible">Laptops</h3>
                    <p class="traducible">Experience power and portability in the palm of your hand. Our laptops are designed to accompany you every step, from work to entertainment, with performance that won't disappoint.</p>
                    <button class="traducible">See more</button>
                </div>
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigeradores.jpg" alt="Refrigerators">
                    <h3 class="traducible">Refrigerators</h3>
                    <p class="traducible">Keep your food fresh and organized with our state-of-the-art refrigerators. Advanced technology ensures energy efficiency, optimized space, and elegant design for your home.</p>
                    <button class="traducible">See more</button>
                </div>
                <div class="categoria">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/tablets.png" alt="Tablets">
                    <h3 class="traducible">Tablets</h3>
                    <p class="traducible">Discover the versatility only a tablet can offer you. Lightweight, fast, and with a superior quality screen, perfect for all your daily tasks, both at home and on the go.</p>
                    <button class="traducible">See more</button>
                </div>
            </div>     
        </section>

        <section id="faq" class="preguntas-frecuentes">
            <div class="card-faq">
                <h2>Frequently Asked Questions  <img src="<?php echo BASE_URL; ?>/Public/Resources/preguntaIcon.png" alt="iconFaq"></h2>
                
                <div class="pregunta">
                    <h3>1. How can I place an order?</h3>
                    <p>To place an order, simply browse our product categories, select the one you want, and add it to your cart. Then follow the checkout process to complete your purchase.</p>
                </div>

                <div class="pregunta">
                    <h3>2. How can I pay for my order?</h3>
                    <p>We accept credit/debit cards and bank transfers. We also offer payment options through PayPal.</p>
                </div>

                <div class="pregunta">
                    <h3>3. Do you ship internationally?</h3>
                    <p>Yes, we ship to multiple countries. You can verify if your country is available during the checkout process.</p>
                </div>

                <div class="pregunta">
                    <h3>4. What is the product delivery time?</h3>
                    <p>Delivery time varies depending on your location. Generally, domestic shipments take between 3 to 7 business days.</p>
                </div>

                <div class="pregunta">
                    <h3>5. Can I return a product?</h3>
                    <p>Yes, we offer returns within 30 days of purchase. The product must be in its original condition and unused.</p>
                </div>

                <div class="pregunta">
                    <h3>6. How can I check product availability?</h3>
                    <p>On each product page, you can see if it's in stock. If a product is out of stock, you can register to be notified when it's available again.</p>
                </div>

                <div class="pregunta">
                    <h3>7. Do products come with warranty?</h3>
                    <p>Yes, all our products come with manufacturer's warranty. Check specific product policies on the details page.</p>
                </div>

                <div class="pregunta">
                    <h3>8. Can I exchange a product for another?</h3>
                    <p>Exchanges are possible within 30 days after purchase, as long as the product is in original condition. For more details, contact our customer service.</p>
                </div>

                <div class="pregunta">
                    <h3>9. How can I contact customer service?</h3>
                    <p>You can contact us through our website contact form or by email at support@cyberstore.com.</p>
                </div>

                <div class="pregunta">
                    <h3>10. How can I register on CyberStore?</h3>
                    <p>You can register by clicking the user icon in the top right corner of the page and filling out the form with your personal information.</p>
                </div>
            </div>
        </section>

        <!-- Pop-up Form -->
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
    <script src="<?php echo JS_URL; ?>/login.js"></script>

    <script>
        // Dark Mode Script
        document.getElementById("modo-oscuro-toggle").addEventListener("click", function(e) {
            e.preventDefault();
            document.body.classList.toggle("dark-mode");
            localStorage.setItem("darkMode", document.body.classList.contains("dark-mode") ? "enabled" : "disabled");
        });

        // Language Toggle Script
        let originalTexts = [];
        document.querySelectorAll(".traducible").forEach(el => originalTexts.push(el.innerText));

        function toggleLanguage() {
            const isEnglish = document.documentElement.lang === "en";
            document.documentElement.lang = isEnglish ? "es" : "en";
            document.getElementById("cambiar-idioma").textContent = isEnglish ? "Change to English" : "Cambiar a Español";

            const translations = {
                "Explore the latest in technology!": "¡Explora lo último en tecnología!",
                "Ready to upgrade your life? Discover products...": "¿Estás listo para darle un upgrade a tu vida? Descubre productos...",
                "Laptops": "Laptops",
                "Refrigerators": "Refrigeradores",
                "Tablets": "Tablets",
                "See more": "Ver más"
            };

            document.querySelectorAll(".traducible").forEach((el, index) => {
                el.textContent = isEnglish ? originalTexts[index] : translations[el.textContent] || el.textContent;
            });

            document.getElementById("buscar").placeholder = isEnglish ? "Buscar productos o más..." : "Search products or more...";
            localStorage.setItem("language", isEnglish ? "es" : "en");
        }

        document.getElementById("cambiar-idioma").addEventListener("click", toggleLanguage);

        // Initialize language
        if (localStorage.getItem("language") === "es") {
            toggleLanguage();
        }

        // Rest of the original scripts remain the same...
    </script>

    <script>
            document.getElementById("icono-usuario").addEventListener("click", function () {
                document.getElementById("formularioRegistro").style.display = "flex"; // Mostrar con "flex" para centrarlo
            });

            function cerrarFormulario() {
                document.getElementById("formularioRegistro").style.display = "none"; // Ocultar el formulario
            }

            document.querySelectorAll('.pregunta h3').forEach(item => {
                item.addEventListener('click', () => {
                    const parent = item.parentElement;
                    parent.classList.toggle('active');
                });
            });

        </script>
</body>
</html>