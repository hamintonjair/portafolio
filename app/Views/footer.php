<a href="https://api.whatsapp.com/send?phone=57<?= esc($perfil['telefono']) ?>" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Botón flotante de subir -->
<button id="btnSubir" class="subir-float">
    <i class="fas fa-arrow-up"></i>
</button>

<style>
/* Asegurar que los botones estén sobre la página */
.whatsapp-float,
.subir-float {
    position: fixed !important;
    /* Garantiza que esté flotante */
    z-index: 9999 !important;
    /* Asegura que esté sobre otros elementos */
}

/* Estilos para el botón flotante de WhatsApp */
.whatsapp-float {
    bottom: 20px;
    right: 20px;
    background-color: #25d366;
    color: white;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    text-decoration: none;
}

.whatsapp-float:hover {
    background-color: #1ebe57;
}

/* Estilos para el botón flotante de subir */
.subir-float {
    bottom: 90px;
    right: 20px;
    background-color: #007bff;
    color: white;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    display: none;
    /* Oculto al inicio */
}

.subir-float:hover {
    background-color: #0056b3;
}
</style>

<script>
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
</script>


<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><?= esc($perfil['titulo']) ?></h5>
                <p><?= esc($perfil['frase']) ?></p>
            </div>
            <div class="col-md-6 text-end">
                <h5>Contacto</h5>
                <p><a href="mailto:social@devtalles.com" class="text-white"
                        target="_blank"><?= esc($perfil['correo']) ?></a></p>
                <p>
                    <a href="<?= esc($perfil['facebook']) ?>" class="text-white me-2" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="<?= esc($perfil['linkedin']) ?>" class="text-white me-2" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <!-- Agregar iconos de GitHub, Instagram y YouTube -->
                    <a href="<?= esc($perfil['git']) ?>" class="text-white me-2" target="_blank"><i
                            class="fab fa-github"></i></a>
                    <a href="<?= esc($perfil['instagram']) ?>" class="text-white me-2" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="<?= esc($perfil['youtube']) ?>youtube" class="text-white me-2" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap JS y dependencias (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!-- JS Personalizado -->

</body>

</html>