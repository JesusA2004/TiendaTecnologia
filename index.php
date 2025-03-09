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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    
<header>
    <h1>CyberStore</h1>
    <nav>
        <div class="menu-principal">
            <input id="buscar" type="text" placeholder="Buscar productos o más..." class="busqueda-usuario">

            <a href="#inicio" class="menu-item">Inicio</a>
            <a href="#nosotros" class="menu-item">Sobre nosotros</a>
            <a href="#productos" class="menu-item">Productos</a>
            <a href="#contacto" class="menu-item">Contacto</a>
            
            <!-- Menú desplegable simplificado -->
            <div class="menu-desplegable">
                <span class="menu-item">Más opciones ▼</span>
                <div class="desplegable-contenido">
                    <a href="#" id="cambiar-idioma">Change to English</a>
                    <a href="URL_DE_MARIO" id="mario-link">Mario</a>
                </div>
            </div>

                    
            <img id="icono-usuario" src="<?php echo BASE_URL; ?>/Public/Resources/registrar.png" alt="Usuario">
        </div>
    </nav>
</header>

<main>
    <section class="carrusel" id="inicio">
        <div class="carrusel-contenedor">
            <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel1.jpg" alt="Producto 1" class="carrusel-img activa">
            <div class="carrusel-texto">
                <h2>Bienvenidos a CyberStore</h2>
                <p>Tu tienda de tecnología online.</p>
            </div>
            
            <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel2.jpg" alt="Producto 2" class="carrusel-img">
            <img src="<?php echo BASE_URL; ?>/Public/Resources/carrusel3.png" alt="Producto 3" class="carrusel-img">
        </div>
        <button class="carrusel-btn prev" onclick="cambiarImagen(-1)">&#10094;</button>
        <button class="carrusel-btn next" onclick="cambiarImagen(1)">&#10095;</button>
    </section>

    <section id="nosotros" class="sobre-nosotros">
        <div class="card-sobre-nosotros">
            <h2>Sobre Nosotros</h2>
            <p align="justify">
                En <strong>CyberStore</strong>, somos apasionados por la tecnología y la innovación. Nuestro objetivo es 
                brindarte los mejores productos con la mejor calidad y precio. Nos especializamos en ofrecer una 
                experiencia de compra segura y eficiente.
            </p>
            <p align="justify">
                Fundada en 2010, CyberStore ha crecido hasta convertirse en un referente en el mundo de la tecnología, 
                ofreciendo laptops, tablets, refrigeradores y más. Nuestro compromiso es con nuestros clientes, 
                asegurándonos de proporcionar un servicio excepcional.
            </p>
            <div class="equipo">
                <div class="miembro">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/mision.png" alt="CEO">
                    <h3>Misión</h3>
                    <p>
                        Nuestra misión es proporcionar productos tecnológicos de alta calidad que mejoren la vida de nuestros clientes, 
                        brindando soluciones innovadoras y accesibles, siempre con un enfoque en la excelencia y la satisfacción del cliente.
                    </p>
                </div>
                <div class="miembro">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/vision.png" alt="Designer">
                    <h3>Visión</h3>
                    <p>
                        Nos esforzamos por ser la tienda online líder en tecnología, destacándonos por ofrecer productos de vanguardia 
                        y un servicio excepcional, comprometidos con el desarrollo sostenible y el bienestar de nuestros clientes.
                    </p>
                </div>
                <div class="miembro">
                    <img src="<?php echo BASE_URL; ?>/Public/Resources/valores.png" alt="Tech">
                    <h3>Valores</h3>
                    <ul>
                        <li><strong>Innovación:</strong> Nos apasiona estar a la vanguardia de la tecnología y ofrecer lo mejor a nuestros clientes.</li>
                        <li><strong>Compromiso:</strong> Nos comprometemos a brindar productos de calidad y un servicio al cliente impecable.</li>
                        <li><strong>Responsabilidad:</strong> Actuamos con responsabilidad social y ambiental en todas nuestras operaciones.</li>
                        <li><strong>Integridad:</strong> Operamos de manera ética, honesta y transparente en todas nuestras relaciones.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="categorias" id="productos">
        <div class="texto">
            <h2 class="traducible">¡Explora lo último en tecnología!</h2>
            <p class="traducible">¿Estás listo para darle un upgrade a tu vida? Descubre productos que combinan estilo, rendimiento y funcionalidad para hacer de tu día a día algo extraordinario. ¡No busques más, tu próxima gran compra está aquí!</p>
        </div>
        <div class="categoria-container">
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/laptops.jpg" alt="Laptops">
                <h3 class="traducible">Laptops</h3>
                <p class="traducible">Experimenta la potencia y la portabilidad en la palma de tu mano. Nuestras laptops están diseñadas para acompañarte en cada paso, desde el trabajo hasta el entretenimiento, con un rendimiento que no te decepcionará.</p>
                <button class="traducible">Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigeradores.jpg" alt="Refrigeradores">
                <h3 class="traducible">Refrigeradores</h3>
                <p class="traducible">Mantén tus alimentos frescos y organizados con nuestros refrigeradores de última generación. Tecnología avanzada que asegura eficiencia energética, espacio optimizado y un diseño elegante para tu hogar.</p>
                <button class="traducible">Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/tablets.png" alt="Tablets">
                <h3 class="traducible">Tablets</h3>
                <p class="traducible">Descubre la versatilidad que solo una tablet puede ofrecerte. Ligera, rápida y con una pantalla de calidad superior, perfecta para todas tus tareas diarias, tanto en el hogar como en movimiento.</p>
                <button class="traducible">Ver más</button>
            </div>
        </div>     
    </section>


     <!-- Formulario emergente -->
     <div id="formularioRegistro" class="modal">
         <div class="modal-contenido">
             <span class="cerrar" onclick="cerrarFormulario()">&times;</span>
             <h2>Registrarme</h2>
            <p>Por favor, ingresa tus datos.</p>
             <br>
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

</main>

<?php require_once __DIR__ . '/Includes/Footer.php'; ?>
<script src="<?php echo JS_URL; ?>/login.js"></script>

<script>
    document.getElementById("modo-oscuro").addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");
        localStorage.setItem("modoOscuro", document.body.classList.contains("dark-mode") ? "true" : "false");
    });

    if (localStorage.getItem("modoOscuro") === "true") {
        document.body.classList.add("dark-mode");
    }

    let textosOriginales = [];
    document.querySelectorAll(".traducible").forEach(el => textosOriginales.push(el.innerText));

    function toggleIdioma() {
        let esEspañol = document.documentElement.lang === "es";
        document.documentElement.lang = esEspañol ? "en" : "es";
        document.getElementById("cambiar-idioma").innerText = esEspañol ? "Cambiar a Español" : "Change to English";

        let traducciones = {
            "CyberStore": "CyberStore",
            "Buscar productos y más...": "Search products and more...",
            "Laptops": "Laptops",
            "Tablets": "Tablets",
            "Refrigeradores": "Refrigerators",
            "Ver más": "See more"
        };

        document.querySelectorAll(".traducible").forEach((el, i) => {
            el.innerText = esEspañol ? traducciones[el.innerText] || el.innerText : textosOriginales[i];
        });

        document.getElementById("buscar").setAttribute("placeholder", esEspañol ? "Search products and more..." : "Buscar productos y más...");

        localStorage.setItem("idioma", esEspañol ? "ingles" : "español");
    }

    document.getElementById("cambiar-idioma").addEventListener("click", toggleIdioma);

    if (localStorage.getItem("idioma") === "ingles") {
        toggleIdioma();
    }

    function cambiarImagen(n) {
        let imagenes = document.querySelectorAll(".carrusel-img");
        let index = Array.from(imagenes).findIndex(img => img.classList.contains("activa"));

        index += n;
        if (index >= imagenes.length) index = 0;
        if (index < 0) index = imagenes.length - 1;

        imagenes.forEach(img => img.classList.remove("activa"));
        imagenes[index].classList.add("activa");
    }

    setInterval(() => cambiarImagen(1), 4000);
    
</script>

<script src="<?php echo JS_URL; ?>/login.js"></script>
 
<script>
    document.getElementById("icono-usuario").addEventListener("click", function () {
        document.getElementById("formularioRegistro").style.display = "flex"; // Mostrar con "flex" para centrarlo
    });

    function cerrarFormulario() {
        document.getElementById("formularioRegistro").style.display = "none"; // Ocultar el formulario
    }

</script>

</body>
</html>
