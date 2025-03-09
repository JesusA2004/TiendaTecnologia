document.addEventListener('DOMContentLoaded', () => {
    // Efecto de carga suave
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 1s ease';
        document.body.style.opacity = '1';
    }, 100);

    // Interacción con las categorías
    const categorias = document.querySelectorAll('.categoria');
    categorias.forEach(categoria => {
        categoria.addEventListener('mouseenter', () => {
            const img = categoria.querySelector('img');
            img.style.transform = 'scale(1.1)';
        });

        categoria.addEventListener('mouseleave', () => {
            const img = categoria.querySelector('img');
            img.style.transform = 'scale(1)';
        });

        categoria.querySelector('button').addEventListener('click', () => {
            const nombreCategoria = categoria.querySelector('p').textContent;
            alert(`Explorando ${nombreCategoria}...`);
            // Aquí puedes agregar la lógica de redirección
        });
    });

    // Efecto de búsqueda
    const inputBusqueda = document.querySelector('header nav input');
    inputBusqueda.addEventListener('focus', () => {
        inputBusqueda.placeholder = '';
    });

    inputBusqueda.addEventListener('blur', () => {
        inputBusqueda.placeholder = 'Buscar productos y más...';
    });

    // Efecto de scroll suave
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.2)';
        } else {
            header.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        }
    });

});

const carrusel = {
    currentIndex: 0,
    init: function() {
        this.items = document.querySelectorAll('.carrusel-item');
        this.indicadores = document.querySelector('.carrusel-indicadores');
        this.createIndicadores();
        this.setEventListeners();
        this.autoPlay();
    },
    createIndicadores: function() {
        this.items.forEach((_, i) => {
            const indicador = document.createElement('button');
            indicador.classList.add('indicador');
            indicador.addEventListener('click', () => this.goToIndex(i));
            this.indicadores.appendChild(indicador);
        });
    },
    setEventListeners: function() {
        document.querySelector('.prev').addEventListener('click', () => this.prev());
        document.querySelector('.next').addEventListener('click', () => this.next());
    },
    autoPlay: function() {
        setInterval(() => this.next(), 5000);
    },
    update: function() {
        document.querySelector('.carrusel-contenedor').style.transform = 
            `translateX(-${this.currentIndex * 100}%)`;
        this.updateIndicadores();
    },
};

document.addEventListener('DOMContentLoaded', () => carrusel.init());