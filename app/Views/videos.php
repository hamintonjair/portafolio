<style>
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
}

h2:hover {
    background-color: rgb(160, 146, 124);
    transform: scale(1.05);
}

.row {

    row-gap: 20px;
    /* Mayor separación vertical */

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
</style>

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
        <div class="row">
            <?php foreach ($proyectos as $proyecto): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
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
                    <img src="<?= base_url('uploads/' . esc($proyecto['imagen'])) ?>" class="card-img-top"
                        alt="<?= esc($proyecto['titulo']) ?>">
                    <?php endif; ?>

                    <div class="card-body">
                        <h2 class="card-title"><?= esc($proyecto['titulo']) ?></h2>
                        <p class="text-muted"><?= esc($proyecto['anio_desarrollo']) ?> |
                            <?= esc($proyecto['tipo_proyecto']) ?></p>
                        <p><strong>Tecnologías:</strong> <?= esc($proyecto['tecnologias']) ?></p>
                        <p><?= esc($proyecto['descripcion']) ?></p>
                        <hr>
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
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>