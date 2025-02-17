<!-- Contenido Principal -->
<div class="main-content" id="mainContent">
    <div class="container-fluid">
        <h2 class="mb-4"><?= $title ?? 'Dashboard' ?></h2>
        <button class="btn btn-primary mb-3" onclick="btnAgregar()">
            <i class="fas fa-plus"></i> Agregar Proyecto
        </button>
        <table id="tablaProyectos" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>URL Demo</th>
                    <th>Año de Desarrollo</th>
                    <th>Tipo de Proyecto</th>
                    <th>Tecnologías</th>
                    <th>URL Repo</th>
                    <th>Video</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>



<!-- Modal para Agregar/Editar -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="modalFormLabel" style="color: blanchedalmond;">Agregar/Editar Proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formProyecto">
                    <input type="hidden" id="id" name="id">

                    <!-- Primera fila: Título y Año de Desarrollo -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="anio_desarrollo" class="form-label">Año de Desarrollo</label>
                            <input type="text" class="form-control" id="anio_desarrollo" name="anio_desarrollo"
                                required>
                        </div>
                    </div>

                    <!-- Segunda fila: Tipo de Proyecto y Tecnologías -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tipo_proyecto" class="form-label">Tipo de Proyecto</label>
                            <select class="form-select" id="tipo_proyecto" name="tipo_proyecto" required>
                                <option value="Web">Web</option>
                                <option value="Móvil">Móvil</option>
                                <option value="Escritorio">Escritorio</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tecnologias" class="form-label">Tecnologías</label>
                            <input type="text" class="form-control" id="tecnologias" name="tecnologias" required>
                            <small class="text-muted">Separa las tecnologías con comas (ej: PHP, JavaScript,
                                CSS).</small>
                        </div>
                    </div>

                    <!-- Tercera fila: URL Demo y URL Repositorio -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="url_demo" class="form-label">URL Demo</label>
                            <input type="url" class="form-control" id="url_demo" name="url_demo" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="url_repo" class="form-label">URL Repositorio</label>
                            <input type="url" class="form-control" id="url_repo" name="url_repo" required>
                        </div>
                    </div>

                    <!-- Descripción en una fila completa -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="url_youtube" class="form-label">URL Youtube</label>
                            <input type="url" class="form-control" id="url_youtube" name="url_youtube" required>
                        </div>
                        <!-- Imagen con previsualización en una fila completa -->
                        <div class="col-md-6 mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                            <small class="text-muted">Sube una imagen para el proyecto.</small>
                            <br>
                            <img id="previewImagen" src="" alt="Previsualización" class="img-thumbnail mt-2"
                                style="max-width: 200px; display: none;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script>
// Mostrar/ocultar sidebar
document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('collapsed');
    document.getElementById('mainContent').classList.toggle('expanded');
});
// Abrir modal para agregar
function btnAgregar() {
    // Limpiar el formulario
    document.getElementById('formProyecto').reset();

    // Limpiar la previsualización de la imagen
    document.getElementById('previewImagen').style.display = 'none';

    document.getElementById('id').value = '';

    // Limpiar el campo de imagen
    document.getElementById('imagen').value = '';

    // Cambiar el título del modal
    document.getElementById('modalFormLabel').textContent = 'Agregar Proyecto';

    // Mostrar el modal
    new bootstrap.Modal(document.getElementById('modalForm')).show();
}

// Botón para abrir el modal de agregar

// Inicializar DataTable y listar

document.addEventListener("DOMContentLoaded", function() {
    $('#tablaProyectos').DataTable({
        processing: true,
        responsive: true, // Habilitar la funcionalidad responsive
        ajax: {
            url: '<?= base_url('dashboard/proyectos/listar') ?>', // Ruta para obtener los datos
            type: 'GET',
            dataSrc: 'data'
        },
        columns: [{
                data: 'id'
            },
            {
                data: 'titulo'
            },
            {
                data: 'descripcion',
                render: function(data) {
                    if (!data) return ''; // Si no hay descripción, retornar vacío

                    let words = data.split(' '); // Dividir el texto en palabras
                    let truncatedText = words.slice(0, 10).join(
                        ' '); // Tomar las primeras 30 palabras

                    if (words.length > 10) {
                        truncatedText +=
                            '...'; // Agregar puntos suspensivos si hay más palabras
                    }

                    return truncatedText;
                }
            },
            {
                data: 'imagen',
                render: function(data) {
                    return `<img src="<?= base_url('uploads/') ?>${data}" alt="Imagen" width="150">`;
                }
            },
            {
                data: 'url_demo',
                render: function(data) {
                    return `<a href="${data}" target="_blank">Ver Demo</a>`;
                }
            },
            {
                data: 'anio_desarrollo'
            },
            {
                data: 'tipo_proyecto'
            },
            {
                data: 'tecnologias'
            },
            {
                data: 'url_repo',
                render: function(data) {
                    return `<a href="${data}" target="_blank">Ver Repo</a>`;
                }
            },
            {
                data: 'url_youtube',
                render: function(data) {
                    if (data) {
                        let videoId = null;

                        // Extraer el ID del video (soporta "youtu.be" y "youtube.com/watch?v=")
                        let match = data.match(
                            /(?:youtu\.be\/|youtube\.com\/(?:.*v=|.*\/))([a-zA-Z0-9_-]{11})/
                        );
                        if (match) {
                            videoId = match[1];
                        }

                        if (videoId) {
                            return `
                <div style="text-align: center;">
                    <iframe width="200" height="150" 
                        src="https://www.youtube.com/embed/${videoId}" 
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>`;
                        }
                    }
                    return 'No disponible';
                }
            },
            {
                data: null,
                render: function(data) {
                    return `
                                <button class="btn btn-warning btn-sm" onclick="editarProyecto(${data.id})">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="eliminarProyecto(${data.id})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            `;
                }
            }
        ],
        columnDefs: [{
                className: "text-center",
                targets: [9]
            }, // Alineación de la columna de acciones
            {
                className: "text-left",
                targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]
            } // Alineación de otras columnas
        ],
        order: [
            [0, 'desc']
        ], // Ordenar por ID en orden descendente
        language: {
            "sEmptyTable": "No hay datos disponibles en la tabla",
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "sInfoFiltered": "(filtrado de _MAX_ entradas en total)",
            "sLengthMenu": "Mostrar _MENU_ entradas",
            "sLoadingRecords": "Cargando...",
            "sProcessing": "Procesando...",
            "sSearch": "Buscar:",
            "sZeroRecords": "No se encontraron resultados",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });


});
// guardar
document.getElementById('btnGuardar').addEventListener('click', function() {
    const formData = new FormData(document.getElementById('formProyecto'));

    // Determinar si es una edición o un nuevo registro
    const id = document.getElementById('id').value;
    const url = id ? `<?= base_url() ?>dashboard/proyectos/update/${id}` :
        '<?= base_url() ?>dashboard/proyectos/guardar';

    fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Cerrar el modal
                $('#modalForm').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: data.message,
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    $('#tablaProyectos').DataTable().ajax.reload();
                });

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error al guardar el proyecto',
                });

            }
        });
});

document.getElementById('imagen').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('previewImagen');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.style.display = 'none';
    }
});

function editarProyecto(id) {
    fetch(`<?= base_url() ?>dashboard/proyectos/obtener/${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('id').value = data.proyecto.id;
            document.getElementById('titulo').value = data.proyecto.titulo;
            document.getElementById('descripcion').value = data.proyecto.descripcion;
            document.getElementById('url_demo').value = data.proyecto.url_demo;
            document.getElementById('anio_desarrollo').value = data.proyecto.anio_desarrollo;
            document.getElementById('tipo_proyecto').value = data.proyecto.tipo_proyecto;
            document.getElementById('tecnologias').value = data.proyecto.tecnologias;
            document.getElementById('url_repo').value = data.proyecto.url_repo;
            document.getElementById('url_youtube').value = data.proyecto.url_youtube;

            // Mostrar la imagen si existe
            const preview = document.getElementById('previewImagen');
            if (data.proyecto.imagen) {
                preview.src = `<?= base_url() ?>uploads/${data.proyecto.imagen}`;
                preview.style.display = 'block';
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }

            document.getElementById('modalFormLabel').textContent = 'Editar Proyecto';
            new bootstrap.Modal(document.getElementById('modalForm')).show();
        });
}


function eliminarProyecto(id) {
    if (confirm('¿Estás seguro de eliminar este proyecto?')) {
        fetch(`<?= base_url() ?>dashboard/proyectos/eliminar/${id}`, {
                method: 'GET',
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {

                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        $('#tablaProyectos').DataTable().ajax.reload();
                    });
                    // Recargar la tabla
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: 'Error al eliminar el proyecto',
                        timer: 2000,
                        showConfirmButton: false
                    });

                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al eliminar el proyecto');
            });
    }
}
</script>