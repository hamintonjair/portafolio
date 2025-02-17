// Mostrar botón de subir cuando se haga scroll
window.onscroll = function() {
    let btnSubir = document.getElementById("btnSubir");
    if (document.documentElement.scrollTop > 200) {
        btnSubir.style.display = "flex";
    } else {
        btnSubir.style.display = "none";
    }
};

// Acción del botón de subir
document.getElementById("btnSubir").addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});