document.addEventListener("DOMContentLoaded", function () {
    var btnSubir = document.getElementById("btn-subir");

    // Mostrar el botón al hacer scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) { // Cuando el usuario baja 300px
            btnSubir.style.display = "block";
        } else {
            btnSubir.style.display = "none";
        }
    });

    // Evento para hacer scroll hasta arriba
    btnSubir.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
