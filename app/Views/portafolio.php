<style>
    /* Variables de tema */
    :root {
        --bg-color: #ffffff;
        --text-color: #333333;
        --card-bg: #f8f9fa;
        --title-bg: rgb(45, 84, 127);
        --title-color: #f8f9fa;
        --hover-bg: rgb(96, 93, 87);
    }

    [data-theme="dark"] {
        --bg-color: #1a1a1a;
        --text-color: #e0e0e0;
        --card-bg: #2d2d2d;
        --title-bg: #2c3e50;
        --title-color: #ffffff;
        --hover-bg: #34495e;
    }

    body {
        background-color: var(--bg-color);
        color: var(--text-color);
        transition: all 0.3s ease-in-out;
    }

    /* Estilos para el botón de tema */
    .theme-toggle {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        background: none;
        border: none;
        cursor: pointer;
        padding: 10px;
        border-radius: 50%;
        background-color: var(--card-bg);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .theme-toggle:hover {
        transform: scale(1.1);
    }

    .theme-toggle i {
        font-size: 1.5rem;
        color: var(--text-color);
    }

    /* Estilos para el contenedor del perfil */
    /* Contenedor del perfil */
    .perfil-contenedor {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 5px;
        text-align: justify;
    }

    /* Imagen del perfil */
    .float-start {
        margin-right: 20px;
        margin-bottom: 15px;
    }

    /* TITULO CORREGIDO: Estilo para centrar y ajustar fondo */
    h3 {
        display: table;
        margin: 0 auto;
        border-radius: 30px;
        background-color: var(--title-bg);
        padding: 10px 20px;
        font-weight: bold;
        font-size: 20px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: var(--title-color);
    }

    h3:hover {
        background-color: var(--hover-bg);
        transform: scale(1.05);
    }

    h2 {
        display: table;
        /* margin: 0 auto; */
        border-radius: 30px;
        background-color: antiquewhite;
        padding: 10px 20px;
        font-weight: bold;
        font-size: 20px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #000000 !important;
    }

    h2:hover {
        background-color: rgb(160, 146, 124);
        transform: scale(1.05);
    }

    /* Imagen del Proyecto */
    .img-proyecto {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;

    }

    .img-proyecto:hover {
        transform: scale(1.05);
    }

    /* Espaciado entre los cards */
    .row.mb-5 {
        margin-bottom: 50px;
    }

    /* Estilo del Card */
    .card {
        background-color: var(--card-bg);
        border-radius: 10px;
        overflow: hidden;
        transition: box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
    }

    /* Video y imagen dentro del card */
    .card .ratio {
        transition: transform 0.3s ease-in-out;
    }

    .card .ratio:hover {
        transform: scale(1.03);
    }

    /* Botón "Ver todos" con efecto */
    .btn-outline-primary {
        transition: all 0.3s ease-in-out;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }

    /* Estilos para la línea de tiempo */
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background-color: var(--title-bg);
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
    }

    .timeline-item {
        padding: 10px 40px;
        position: relative;
        width: 50%;
        margin-bottom: 30px;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-content {
        padding: 20px;
        background-color: var(--card-bg);
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
    }

    .timeline-content .img-proyecto {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .timeline-content .img-proyecto:hover {
        transform: scale(1.02);
    }

    /* Estilos para la descripción estructurada */
    .timeline-content .descripcion {
        padding: 15px;
        margin: 15px 0;
    }

    .timeline-content .descripcion p {
        margin: 0;
        line-height: 1.8;
        text-align: justify;
    }

    .timeline-content .descripcion p:not(:last-child) {
        margin-bottom: 1.5em;
    }

    .timeline-content .tecnologias {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 15px 0;
    }

    .timeline-content .tecnologias span {
        background-color: var(--title-bg);
        color: var(--title-color);
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.9em;
    }

    .timeline-content .botones {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .timeline-content .botones .btn {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 8px 16px;
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .timeline-content .botones .btn:hover {
        transform: translateY(-2px);
    }

    .timeline-year {
        position: absolute;
        right: -80px;
        top: 20px;
        background-color: var(--title-bg);
        color: var(--title-color);
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: bold;
        z-index: 1;
    }

    .timeline-item:nth-child(even) .timeline-year {
        left: -80px;
        right: auto;
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: var(--title-bg);
        border: 4px solid var(--bg-color);
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    .timeline-item:nth-child(even)::after {
        left: -16px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 10px 10px 10px 0;
        border-color: transparent var(--card-bg) transparent transparent;
        right: -10px;
        top: 20px;
    }

    .timeline-item:nth-child(even)::before {
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent var(--card-bg);
        left: -10px;
        right: auto;
    }

    @media screen and (max-width: 768px) {
        .timeline::after {
            left: 31px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
            margin-bottom: 30px;
            left: 0 !important;
        }

        .timeline-item::after {
            left: 15px;
        }

        .timeline-item::before {
            left: 45px;
            border-width: 10px 0 10px 10px;
        }

        .timeline-year {
            left: 70px !important;
            right: auto !important;
        }
    }

    .timeline-content h2 {
        display: table;
        border-radius: 30px;
        background-color: antiquewhite;
        padding: 10px 20px;
        font-weight: bold;
        font-size: 20px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #000000 !important;
    }

    .timeline-content h2:hover {
        background-color: rgb(160, 146, 124);
        transform: scale(1.05);
    }
</style>

<!-- Botón de cambio de tema -->
<button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
    <i class="fas fa-moon"></i>
</button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('themeToggle');
        const icon = themeToggle.querySelector('i');

        // Verificar preferencia guardada
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
            updateIcon(savedTheme);
        }

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
        });

        function updateIcon(theme) {
            icon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }
    });
</script>

<!-- Sección Perfil -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Columna para la imagen y el texto -->
            <div class="col-12">
                <div class="perfil-contenedor">
                    <!-- Imagen de perfil flotando a la izquierda -->
                    <img src="<?= base_url('uploads/' . esc($perfil['imagen'])) ?>" alt="Foto de perfil"
                        class="img-fluid rounded-circle float-start me-4" style="width: 200px;">

                    <!-- Título desde la base de datos -->
                    <h1 style="text-align: center;"><?= esc($perfil['titulo']) ?></h1>

                    <!-- Descripción mostrando HTML sin escape -->
                    <p><?= esc($perfil['descripcion'], 'raw') ?></p>

                </div>
            </div>
        </div>
    </div>
</section>

<hr>
<section id="projects" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Proyectos realizados </h3>
        <div class="timeline">
            <?php
            // Ordenar proyectos por año
            usort($proyectos, function ($a, $b) {
                return $b['anio_desarrollo'] - $a['anio_desarrollo'];
            });

            foreach ($proyectos as $proyecto): ?>
                <div class="timeline-item">
                    <div class="timeline-year"><?= esc($proyecto['anio_desarrollo']) ?></div>
                    <div class="timeline-content">
                        <img src="<?= base_url('uploads/' . esc($proyecto['imagen'])) ?>" class="img-proyecto"
                            alt="<?= esc($proyecto['titulo']) ?>">
                        <h2><?= esc($proyecto['titulo']) ?></h2>
                        <p class="badge bg-primary mb-2"><?= esc($proyecto['tipo_proyecto']) ?></p>

                        <div class="tecnologias">
                            <?php
                            $tecnologias = explode(',', $proyecto['tecnologias']);
                            foreach ($tecnologias as $tecnologia): ?>
                                <span><?= trim(esc($tecnologia)) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="descripcion">
                            <?php
                            $parrafos = explode('.', $proyecto['descripcion']);
                            foreach ($parrafos as $parrafo):
                                if (trim($parrafo) != ''): ?>
                                    <p><?= nl2br(trim(esc($parrafo))) ?></p>
                            <?php endif;
                            endforeach; ?>
                        </div>

                        <div class="botones">
                            <a href="<?= esc($proyecto['url_demo']) ?>" class="btn btn-primary" target="_blank">
                                <i class="fas fa-eye"></i> Demo
                            </a>
                            <a href="<?= esc($proyecto['url_repo']) ?>" class="btn btn-secondary" target="_blank">
                                <i class="fab fa-github"></i> Code
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Botón Ver Todos -->
<div class="text-center mt-5 mb-5">
    <a href="<?= base_url('proyectos') ?>" class="btn btn-outline-primary btn-lg">
        <i class="fas fa-eye me-2"></i>Ver todos los proyectos
    </a>
</div>

<style>
    /* Estilos para el botón Ver Todos */
    .btn-outline-primary {
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        border-width: 2px;
    }

    .btn-outline-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }

    .btn-outline-primary i {
        font-size: 1.1em;
    }
</style>