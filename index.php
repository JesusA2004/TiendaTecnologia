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
            <input id="buscar" type="text" placeholder="Buscar productos y más...">
            
            <!-- Menú de accesibilidad -->
            <div class="accesibilidad">
                <img id="icono-accesibilidad" src="<?php echo BASE_URL; ?>/Public/Resources/accesibilidad.png" alt="Accesibilidad" class="icono-accesibilidad">
                <div class="accesibilidad-menu" id="menu-accesibilidad">
                    <a href="#" id="modo-oscuro">Modo oscuro</a>
                    <a href="#" id="cambiar-idioma">Change to English</a>
                </div>
            </div>

            <!-- Menú adicional -->
            <div class="menu-adicional">
                <img id="icono-menu-adicional" src="<?php echo BASE_URL; ?>/Public/Resources/menu.png" alt="Menu Adicional" width="30px" height="30px">
                <div class="menu-adicional-menu" id="menu-adicional">
                    <a href="#inicio">Inicio</a>
                    <a href="#productos">Nuestros productos</a>
                    <a href="#contacto" onclick="document.getElementById('formularioRegistro').style.display='block'">Contáctenos</a>
                    <a href="#footer" onclick="window.scrollTo(0, document.body.scrollHeight);">Sobre nosotros</a>
                    <a href="URL_DE_MARIO" id="mario-link">Mario</a> <!-- Enlace para Mario -->
                </div>
            </div>

            <img id="icono-usuario" src="<?php echo BASE_URL; ?>/Public/Resources/user.png" alt="Usuario" width="40px" height="40px">
        </nav>
    </header>

    <main>
        <section class="banner">
            <img src="<?php echo BASE_URL; ?>/Public/Resources/banner.jpg" alt="Promo Xbox">
        </section>
        <section class="categorias">
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/Laptop.png" alt="Laptops">
                <p class="traducible">Laptops</p>
                <button class="traducible">Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/tablet.jpg" alt="Tablets">
                <p class="traducible">Tablets</p>
                <button class="traducible">Ver más</button>
            </div>
            <div class="categoria">
                <img src="<?php echo BASE_URL; ?>/Public/Resources/refrigerador.jpg" alt="Refrigeradores">
                <p class="traducible">Refrigeradores</p>
                <button class="traducible">Ver más</button>
            </div>
        </section>
    </main>

    <?php require_once __DIR__ . '/Includes/Footer.php'; ?>
    <script src="<?php echo JS_URL; ?>/login.js"></script>

    <script>
        // Menú desplegable de accesibilidad
        document.getElementById("icono-accesibilidad").addEventListener("click", function () {
            let menu = document.getElementById("menu-accesibilidad");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        });

        // Menú desplegable adicional
        document.getElementById("icono-menu-adicional").addEventListener("click", function () {
            let menu = document.getElementById("menu-adicional");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        });

        // Función para cambiar a modo oscuro
        function toggleModoOscuro() {
            document.body.classList.toggle("dark-mode");
            let modoOscuroActivado = document.body.classList.contains("dark-mode");
            localStorage.setItem("modoOscuro", modoOscuroActivado ? "true" : "false");
        }

        document.getElementById("modo-oscuro").addEventListener("click", toggleModoOscuro);

        // Aplicar modo oscuro si estaba activado antes
        if (localStorage.getItem("modoOscuro") === "true") {
            document.body.classList.add("dark-mode");
        }

        // Guardar texto original de la página
        let textosOriginales = [];
        document.querySelectorAll(".traducible").forEach(el => {
            textosOriginales.push(el.innerText);
        });

        // Función para traducir dinámicamente la página
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
                "Ver más": "See more",
                "Cambiar a Español": "Change to English",
                "Change to English": "Cambiar a Español"
            };

            // Traducir dinámicamente todos los elementos con la clase "traducible"
            document.querySelectorAll(".traducible").forEach((el, i) => {
                el.innerText = esEspañol ? traducciones[el.innerText] || el.innerText : textosOriginales[i];
            });

            // Cambiar el placeholder del input de búsqueda
            document.getElementById("buscar").setAttribute("placeholder", esEspañol ? "Search products and more..." : "Buscar productos y más...");

            // Guardar idioma en localStorage
            localStorage.setItem("idioma", esEspañol ? "ingles" : "español");
        }

        document.getElementById("cambiar-idioma").addEventListener("click", toggleIdioma);

        // Aplicar idioma si estaba cambiado antes
        if (localStorage.getItem("idioma") === "ingles") {
            toggleIdioma();
        }

        // Cerrar formulario emergente
        function cerrarFormulario() {
            document.getElementById("formularioRegistro").style.display = "none";
        }

        document.getElementById("icono-usuario").addEventListener("click", function () {
            document.getElementById("formularioRegistro").style.display = "block";
        });
    </script>
</body>
</html>
