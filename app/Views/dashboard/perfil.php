<script type="text/javascript" src="http://localhost/portafolio/assets/js/tinymce/tinymce.min.js"></script>

<div class="main-content" id="mainContent">
    <div class="container-fluid py-4">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Editar Perfil</h2>

            <?php if (session()->get('success')): ?>
            <div class="alert alert-success"><?= session()->get('success') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('dashboard/guardarPerfil') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?= esc($perfil['id']) ?>">

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"
                            value="<?= esc($perfil['titulo']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            value="<?= esc($perfil['facebook']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="git" class="form-label">GitHub</label>
                        <input type="text" class="form-control" id="git" name="git" value="<?= esc($perfil['git']) ?>"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            value="<?= esc($perfil['linkedin']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            value="<?= esc($perfil['instagram']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube"
                            value="<?= esc($perfil['youtube']) ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                            value="<?= esc($perfil['telefono']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo"
                            value="<?= esc($perfil['correo']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="frase" class="form-label">Frase</label>
                        <input type="text" class="form-control" id="frase" name="frase"
                            value="<?= esc($perfil['frase']) ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="20" required>
                        <?= esc($perfil['descripcion']) ?>
                    </textarea>
                </div>

                <div class="mb-3 text-center">
                    <label for="imagen" class="form-label">Imagen de Perfil</label>
                    <div class="d-flex flex-column align-items-center">
                        <input type="file" class="form-control mb-3" id="imagen" name="imagen">
                        <img src="<?= base_url('uploads/' . esc($perfil['imagen'])) ?>" alt="Foto de perfil"
                            class="img-fluid rounded-circle shadow-lg" style="width: 180px; height: 200px;">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
tinymce.init({
    selector: '#descripcion',
    width: "100%",
    heigth: 400,
    statubar: true,
    plugins: 'preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker editimage help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable export',
    tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
    tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
    tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
    tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
    mobile: {
        plugins: 'preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
    },
    menu: {
        tc: {
            title: 'Comments',
            items: 'addcomment showcomments deleteallconversations'
        }
    },
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
});
</script>