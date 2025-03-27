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

/* Estilos para las tarjetas */
.card {
    background-color: var(--card-bg);
    border-radius: 15px;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border: none;
}

.card:hover {
    transform: scale(1.03);
    box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.3);
}

/* Efecto en imágenes y videos */
.card img,
.card iframe {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    transition: transform 0.3s ease-in-out;
}

/* Títulos con efecto */
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
    border-radius: 30px;
    background-color: var(--card-bg);
    padding: 10px 20px;
    font-weight: bold;
    font-size: 20px;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    color: var(--text-color);
}

h2:hover {
    background-color: var(--hover-bg);
    transform: scale(1.05);
}

/* Estilos para la descripción */
.descripcion {
    padding: 15px;
    margin: 15px 0;
}

.descripcion p {
    margin: 0;
    line-height: 1.8;
    text-align: justify;
}

.descripcion p:not(:last-child) {
    margin-bottom: 1.5em;
}

/* Tecnologías */
.tecnologias {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 15px 0;
}

.tecnologias span {
    background-color: var(--title-bg);
    color: var(--title-color);
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.9em;
}

/* Botones */
.btn {
    border-radius: 20px;
    padding: 8px 20px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}

.row {
    row-gap: 20px;
}

/* Párrafo introductorio */
.parrafo {
    text-align: justify;
    line-height: 1.8;
    max-width: 80%;
    margin: 0 auto;
    color: var(--text-color);
    background-color: var(--card-bg);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Fondo gris para las tarjetas */
.card {
    background-color: #f8f9fa;
    border-radius: 15px;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

}

/* Efecto de zoom al pasar el mouse */
.card:hover {
    transform: scale(1.03);
    box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.3);
}

/* Efecto en imágenes y videos */
.card img,
.card iframe {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    transition: transform 0.3s ease-in-out;
}


/* Título con efecto */
h3 {
    display: table;
    /* Ajusta el fondo al tamaño del texto */
    margin: 0 auto;
    /* Centra el h3 horizontalmente */
    border-radius: 30px;
    background-color: rgb(45, 84, 127);
    padding: 10px 20px;
    font-weight: bold;
    font-size: 20px;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    color: #f8f9fa;
}

h3:hover {
    background-color: rgb(96, 93, 87);
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

/* Párrafo más estrecho con efecto */
.parrafo {
    text-align: justify;
    line-height: 1.5;
    max-width: 80%;
    margin: 0 auto;
    transition: opacity 0.3s ease-in-out;
}

p:hover {
    opacity: 0.8;
}

/* Botones estilizados */
.btn {
    border-radius: 20px;
    padding: 8px 20px;
    font-weight: bold;
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
    overflow: hidden;
}

.timeline-content:hover {
    transform: translateY(-5px);
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

/* Estilos para la imagen del proyecto */
.img-proyecto {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
    margin-bottom: 20px;
}

.img-proyecto:hover {
    transform: scale(1.02);
}

/* Ajuste para el contenedor de video */
.ratio.ratio-16x9 {
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
}

.ratio.ratio-16x9 iframe {
    border-radius: 10px;
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

<!-- Sección Videos -->
<section id="videos" class="py-5">
    <div class="container">
        <h3>Todos los Proyectos</h3>
        <br>
        <p class="parrafo">
            Cada uno de estos proyectos ha sido desarrollado con gran dedicación, combinando
            creatividad, innovación y un alto nivel de compromiso. Cada línea de código, cada diseño y cada
            funcionalidad
            han sido cuidadosamente trabajados para ofrecer soluciones eficientes y de calidad.
        </p>
        <br>
        <br>
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
                    <?php
                        $videoId = null;
                        if (!empty($proyecto['url_youtube'])) {
                            if (preg_match("/(?:youtu\.be\/|youtube\.com\/(?:.*v=|.*\/))([a-zA-Z0-9_-]{11})/", $proyecto['url_youtube'], $matches)) {
                                $videoId = $matches[1] ?? null;
                            }
                        }
                        ?>

                    <?php if ($videoId): ?>
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= esc($videoId) ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <?php else: ?>
                    <img src="<?= base_url('uploads/' . esc($proyecto['imagen'])) ?>" class="img-proyecto"
                        alt="<?= esc($proyecto['titulo']) ?>">
                    <?php endif; ?>

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

                    <div class="d-grid gap-2 d-md-block">
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