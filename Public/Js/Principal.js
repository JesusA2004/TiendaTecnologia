document.addEventListener('DOMContentLoaded', () => {
    // ========== MENÚ PRINCIPAL Y SUBMENÚS ==========
    const menuToggle = document.querySelector('.menu-toggle');
    const body = document.body;
    let submenuTimer;

    // Toggle menú principal
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        body.classList.toggle('menu-active');
        menuToggle.classList.toggle('active');
    });

    // Comportamiento submenús
    document.querySelectorAll('.menu-desplegable').forEach(submenu => {
        const trigger = submenu.querySelector('.menu-item');
        
        // Desktop - Hover
        submenu.addEventListener('mouseenter', () => {
            if (window.innerWidth > 992) {
                clearTimeout(submenuTimer);
                submenu.classList.add('active');
            }
        });
        
        submenu.addEventListener('mouseleave', () => {
            if (window.innerWidth > 992) {
                submenuTimer = setTimeout(() => {
                    submenu.classList.remove('active');
                }, 300);
            }
        });

        // Mobile - Click
        trigger.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                e.stopPropagation();
                const wasActive = submenu.classList.contains('active');
                
                document.querySelectorAll('.menu-desplegable').forEach(other => {
                    other.classList.remove('active');
                });
                
                if (!wasActive) {
                    submenu.classList.add('active');
                }
            }
        });
    });

    // Cerrar menús al hacer click fuera
    document.addEventListener('click', (e) => {
        // Cerrar menú principal
        if (!e.target.closest('nav') && !e.target.closest('.menu-toggle')) {
            body.classList.remove('menu-active');
            menuToggle.classList.remove('active');
        }
        
        // Cerrar submenús en mobile
        if (window.innerWidth <= 992 && !e.target.closest('.menu-desplegable')) {
            document.querySelectorAll('.menu-desplegable').forEach(sub => {
                sub.classList.remove('active');
            });
        }
    });

    // ========== NAVEGACIÓN Y SCROLL SUAVE ==========
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function(e) {
            // Manejar enlaces internos
            if (this.hash) {
                e.preventDefault();
                const target = document.querySelector(this.hash);
                
                // Scroll suave
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

                // Cerrar menú en móvil
                if (window.innerWidth <= 992) {
                    body.classList.remove('menu-active');
                    menuToggle.classList.remove('active');
                    document.querySelectorAll('.menu-desplegable').forEach(sub => {
                        sub.classList.remove('active');
                    });
                }
            }
        });
    });

    // ========== CARRUSEL ==========
    const slides = document.querySelectorAll('.carrusel-img');
    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoPlayInterval;

    const showSlide = (n) => {
        slides.forEach(slide => slide.classList.remove('activa'));
        currentSlide = (n + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('activa');
    };

    const startAutoPlay = () => {
        autoPlayInterval = setInterval(() => showSlide(currentSlide + 1), 5000);
    };

    const stopAutoPlay = () => clearInterval(autoPlayInterval);

    document.querySelector('.prev').addEventListener('click', () => {
        stopAutoPlay();
        showSlide(currentSlide - 1);
    });

    document.querySelector('.next').addEventListener('click', () => {
        stopAutoPlay();
        showSlide(currentSlide + 1);
    });

    startAutoPlay();

    // ========== MODO OSCURO ==========
    const toggleModoOscuro = document.getElementById("modo-oscuro-toggle");
    if (localStorage.getItem("modoOscuro") === "activado") {
        body.classList.add("modo-oscuro");
    }

    toggleModoOscuro.addEventListener("click", (e) => {
        e.preventDefault();
        body.classList.toggle("modo-oscuro");
        localStorage.setItem("modoOscuro", body.classList.contains("modo-oscuro") ? "activado" : "desactivado");
    });

    // ========== FORMULARIO ==========
    const formulario = document.getElementById("formularioRegistro");
    document.getElementById("icono-usuario").addEventListener("click", () => {
        formulario.style.display = "flex";
    });

    const cerrarFormulario = () => formulario.style.display = "none";
    document.querySelector('.modal .cerrar')?.addEventListener('click', cerrarFormulario);

    // ========== FAQ ==========
    document.querySelectorAll('.pregunta h3').forEach(item => {
        item.addEventListener('click', () => {
            item.parentElement.classList.toggle('active');
        });
    });

    // ========== CONTEO REGRESIVO ==========
    const countDownDate = new Date("Dec 31, 2025 23:59:59").getTime();
    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = countDownDate - now;
        
        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("countdown").textContent = "¡Oferta Expirada!";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").textContent = 
            `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }, 1000);
});
