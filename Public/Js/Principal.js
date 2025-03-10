document.addEventListener('DOMContentLoaded', () => {
    // ================== CARRUSEL ==================
    const slides = document.querySelectorAll('.carrusel-img');
    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoPlayInterval;

    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('activa'));
        currentSlide = (n + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('activa');
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(() => showSlide(currentSlide + 1), 5000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    document.querySelector('.prev').addEventListener('click', () => {
        stopAutoPlay();
        showSlide(currentSlide - 1);
    });

    document.querySelector('.next').addEventListener('click', () => {
        stopAutoPlay();
        showSlide(currentSlide + 1);
    });

    startAutoPlay();

    // ================== MENÚ HAMBURGUESA ==================
    const menuToggle = document.querySelector('.menu-toggle');
    const menuPrincipal = document.querySelector('.menu-principal');
    const bars = document.querySelectorAll('.menu-toggle span');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        menuPrincipal.classList.toggle('active');

        // Animación de icono
        bars[0].style.transform = menuToggle.classList.contains('active') 
            ? 'rotate(45deg) translate(5px, 5px)' 
            : 'none';
            
        bars[1].style.opacity = menuToggle.classList.contains('active') 
            ? '0' 
            : '1';
            
        bars[2].style.transform = menuToggle.classList.contains('active') 
            ? 'rotate(-45deg) translate(7px, -6px)' 
            : 'none';
    });

    // Cerrar menú al hacer click fuera
    document.addEventListener('click', (e) => {
        if (!menuPrincipal.contains(e.target) && 
            !menuToggle.contains(e.target) &&
            menuPrincipal.classList.contains('active')) {
            
            menuToggle.classList.remove('active');
            menuPrincipal.classList.remove('active');
            bars.forEach(bar => bar.style = '');
        }
    });

    // Cerrar menú al seleccionar opción (mobile)
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                menuToggle.classList.remove('active');
                menuPrincipal.classList.remove('active');
                bars.forEach(bar => bar.style = '');
            }
        });
    });

    // ================== MODO OSCURO ==================
    const toggleModoOscuro = document.getElementById("modo-oscuro-toggle");
    const body = document.body;

    if (localStorage.getItem("modoOscuro") === "activado") {
        body.classList.add("modo-oscuro");
    }

    toggleModoOscuro.addEventListener("click", function (e) {
        e.preventDefault();
        body.classList.toggle("modo-oscuro");

        localStorage.setItem("modoOscuro", body.classList.contains("modo-oscuro") ? "activado" : "desactivado");
    });

    // ================== FORMULARIO ==================
    document.getElementById("icono-usuario").addEventListener("click", function () {
        document.getElementById("formularioRegistro").style.display = "flex";
    });

    function cerrarFormulario() {
        document.getElementById("formularioRegistro").style.display = "none";
    }
    
    // Evento para la X de cerrar el formulario emergente
    const cerrarBtn = document.querySelector('.modal .cerrar');
    if (cerrarBtn) {
        cerrarBtn.addEventListener('click', cerrarFormulario);
    }

    // ================== FAQ ==================
    document.querySelectorAll('.pregunta h3').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            parent.classList.toggle('active');
        });
    });
});
