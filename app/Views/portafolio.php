<style>
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
    background-color: #f8f9fa;
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
</style>
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
        <h3 class="text-center mb-4">Mis proyectos</h3>
        <br>
        <?php
        // Limitar a los primeros 4 proyectos
        $primerosProyectos = array_slice($proyectos, 0, 4);
        foreach ($primerosProyectos as $proyecto): ?>

        <div class="row mb-5 align-items-center">
            <!-- Imagen a la izquierda -->
            <div class="col-md-4">
                <img src="<?= base_url('uploads/'. esc($proyecto['imagen'])) ?>" class="img-fluid rounded img-proyecto"
                    alt="<?= esc($proyecto['titulo']) ?>">
            </div>
            <style>
            .img-proyecto {
                width: 100%;
                /* O un valor fijo como 300px */
                height: 200px;
                /* Tamaño uniforme */
                object-fit: cover;
                /* Recorta la imagen para ajustarse sin deformarse */
            }
            </style>
            <!-- Contenido a la derecha -->
            <div class="col-md-8">
                <h2><?= esc($proyecto['titulo']) ?></h2>
                <p style="border-radius: 30px; background-color: yellowgreen; text-align:center;"
                    class="col-md-2 text-muted">
                    <?= esc($proyecto['anio_desarrollo']) ?> |
                    <?= esc($proyecto['tipo_proyecto']) ?></p>

                <p><strong>Tecnologías:</strong> <?= esc($proyecto['tecnologias']) ?></p>
                <p style="text-align: justify;"><?= esc($proyecto['descripcion']) ?></p>
                <div class="d-grid gap-2 d-md-block">
                    <a href="<?= esc($proyecto['url_demo']) ?>" class="btn btn-primary" target="_blank"><i
                            class="fas fa-eye"></i> Demo</a>
                    <a href="<?= esc($proyecto['url_repo']) ?>" class="btn btn-secondary" target="_blank"><i
                            class="fab fa-github"></i> Code</a>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; ?>

        <!-- Botón "Ver todos" -->
        <div class="text-center mt-4">
            <a href="<?= base_url('videos') ?>" class="btn btn-outline-primary">Ver todos</a>
        </div>
    </div>
</section>