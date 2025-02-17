<!-- Contenido Principal -->
<div class="main-content" id="mainContent">
    <div class="container-fluid">
        <h2 class="mb-4"><?= $title ?? 'Dashboard' ?></h2>
        <?= $this->renderSection('content') ?>
    </div>
</div>

<!-- Modal para Agregar/Editar -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormLabel">Agregar Proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formProyecto">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tecnologias" class="form-label">Tecnologías</label>
                        <input type="text" class="form-control" id="tecnologias" name="tecnologias" required>
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

// Inicializar DataTable
$(document).ready(function() {
    $('#tablaProyectos').DataTable({
        ajax: {
            url: '<?= base_url('dashboard/proyectos/listar') ?>',
            dataSrc: ''
        },
        columns: [{
                data: 'id'
            },
            {
                data: 'titulo'
            },
            {
                data: 'descripcion'
            },
            {
                data: 'tecnologias'
            },
            {
                data: null,
                render: function(data) {
                    return `
                                <button class="btn btn-sm btn-warning btnEditar" data-id="${data.id}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger btnEliminar" data-id="${data.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            `;
                }
            }
        ]
    });

    // Abrir modal para agregar
    $('#btnAgregar').click(function() {
        $('#modalForm').modal('show');
    });

    // Guardar o actualizar proyecto
    $('#btnGuardar').click(function() {
        const formData = new FormData(document.getElementById('formProyecto'));
        fetch('<?= base_url('dashboard/proyectos/guardar') ?>', {
                method: 'POST',
                body: formData
            }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    $('#modalForm').modal('hide');
                    $('#tablaProyectos').DataTable().ajax.reload();
                }
            });
    });
});
</script>