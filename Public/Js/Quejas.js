document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const menuToggle = document.querySelector('.menu-toggle');
    let submenuTimer;

    // ========== MENÚ PRINCIPAL / HAMBURGUESA ==========
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        body.classList.toggle('menu-active');
        menuToggle.classList.toggle('active');
    });

    // ========== SUBMENÚS ("More options") ==========
    // Aquí se asume que el elemento que dispara el submenú 
    // es .menu-item dentro de .menu-desplegable
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
        if (trigger) {
            trigger.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    const wasActive = submenu.classList.contains('active');
                    
                    // Cierra todos los submenús antes de abrir el actual
                    document.querySelectorAll('.menu-desplegable').forEach(other => {
                        other.classList.remove('active');
                    });
                    
                    if (!wasActive) {
                        submenu.classList.add('active');
                    }
                }
            });
        }
    });

    // ========== CERRAR MENÚ AL HACER CLICK FUERA ==========
    document.addEventListener('click', (e) => {
        // Cerrar menú principal si se hace clic fuera de la navegación y del botón hamburguesa
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
    // Maneja enlaces con hash interno para hacer scroll suave
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function(e) {
            // Verifica si el enlace tiene hash (#seccion) y si pertenece a la misma página
            if (this.hash) {
                const linkUrl = new URL(this.href, window.location.origin);
                if (linkUrl.pathname === window.location.pathname) {
                    e.preventDefault();
                    const target = document.querySelector(this.hash);
                    
                    // Scroll suave si existe el elemento destino
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }

                    // Cerrar menú y submenús en móvil
                    if (window.innerWidth <= 992) {
                        body.classList.remove('menu-active');
                        menuToggle.classList.remove('active');
                        document.querySelectorAll('.menu-desplegable').forEach(sub => {
                            sub.classList.remove('active');
                        });
                    }
                }
            }
        });
    });

    // ========== CARRUSEL (OPCIONAL) ==========
    const slides = document.querySelectorAll('.carrusel-img');
    if (slides.length > 0) {
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

        // Flechas prev/next (si existen en tu HTML)
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                stopAutoPlay();
                showSlide(currentSlide - 1);
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                stopAutoPlay();
                showSlide(currentSlide + 1);
            });
        }

        startAutoPlay();
    }

    // ========== MODO OSCURO ==========
    const toggleModoOscuro = document.getElementById("modo-oscuro-toggle");
    if (localStorage.getItem("modoOscuro") === "activado") {
        body.classList.add("modo-oscuro");
    }

    if (toggleModoOscuro) {
        toggleModoOscuro.addEventListener("click", (e) => {
            e.preventDefault();
            body.classList.toggle("modo-oscuro");
            localStorage.setItem("modoOscuro", 
                body.classList.contains("modo-oscuro") ? "activado" : "desactivado"
            );
        });
    }

    // ========== FORMULARIO MODAL (OPCIONAL) ==========
    const formulario = document.getElementById("formularioRegistro");
    const iconoUsuario = document.getElementById("icono-usuario");
    if (iconoUsuario && formulario) {
        iconoUsuario.addEventListener("click", () => {
            formulario.style.display = "flex";
        });
    }
    const cerrarFormulario = () => {
        if (formulario) formulario.style.display = "none";
    };
    const cerrarBtn = document.querySelector('.modal .cerrar');
    if (cerrarBtn) {
        cerrarBtn.addEventListener('click', cerrarFormulario);
    }

    // ========== FAQ (ACORDEÓN) ==========
    document.querySelectorAll('.pregunta h3').forEach(item => {
        item.addEventListener('click', () => {
            item.parentElement.classList.toggle('active');
        });
    });

});
