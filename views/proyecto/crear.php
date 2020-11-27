<?php
require_once 'views/header.php';
require_once 'views/menu.php';
?>

<div id="main-container">
      <div class="container">
            <h1 class="text-center text-uppercase pt-3  pb-4"> Incluir Proyecto </h1>

            <div class="row ">

                  <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <form action="<?php echo constant('URL'); ?>/proyecto/crear" class="was-validated"
                              id="formulario-crear-proyecto" method="post" enctype="multipart/form-data">
                              <div class="form-row">
                                    <div class="col-12">
                                          <p class="text-danger mb-3">
                                                <small>Los campos que contengan ( * ) son
                                                      <strong>Obligatorios</strong></small>
                                          </p>
                                          <input type="hidden" value="1" name="formulario">
                                    </div>

                                    <div class="col-12 form-group ">
                                          <?php $this->showMessages(); ?>
                                    </div>

                                    <div class="col-12 col-md-8 form-group">
                                          <label for="nombre_pro">Nombre del proyecto*</label>
                                          <input maxlength="255" type="text" name="nombre_pro" id="nombre_pro"
                                                placeholder="Introduce el nombre" class="form-control validarInput"
                                                required>
                                          <small class="form-text text-muted">Nombre del proyecto</small>
                                    </div>

                                    <div class="col-12 col-md-4  form-group">
                                          <label for="fecha_inicio_pro">Fecha de inicio*</label>
                                          <input maxlength="255" type="date" name="fecha_inicio_pro"
                                                id="fecha_inicio_pro" class="form-control validarInput" required>
                                          <small class="form-text text-muted">Introduce la fecha de inicio </small>
                                    </div>
                                    <div class="col-12 form-group">
                                          <label for="descripcion_pro">Descripción del proyecto</label>
                                          <textarea name="descripcion_pro" id="descripcion_pro"
                                                class="form-control textarea" maxlength="255"
                                                placeholder="Descripcion del proyecto"></textarea>
                                          <small class="form-text text-muted">Breve descripción del proyecto </small>
                                    </div>

                                    <div class="col-12 form-group">
                                          <label for="imagen_pro">Imagen del proyecto*</label>
                                          <div class="custom-file ">

                                                <input type="file" name="imagen_pro" id="imagen_pro"
                                                      class="custom-file-input validarInput" id="validatedCustomFile"
                                                      required>
                                                <label class="custom-file-label" for="validatedCustomFile"
                                                      id="imagen_pro_label">Elige una
                                                      imagen *</label>


                                          </div>

                                    </div>

                                    <div class="col-12 form-group">

                                          <img src="" class="rounded imagen-presubida imagenesPresubida"
                                                id="imagen-previsualizar" data-toggle="modal"
                                                data-target="#imagenPresubida">
                                    </div>

                                    <div class="col-12 form-group text-center mb-5">
                                          <button class="btn btn-caritas" type="submit">
                                                Incluir Proyecto
                                          </button>
                                    </div>

                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>



<!-- Modal -->
<div class="modal fade" id="imagenPresubida" tabindex="-1" aria-labelledby="imagenPresubidaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">

                  <div class="modal-body">
                        <img src="" class="w-100 h-100 imagenesPresubida">
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-caritas" data-dismiss="modal">Cerrar</button>
                  </div>
            </div>
      </div>
</div>


<script src="<?php echo constant('URL'); ?>/public/js/crearProyecto.js"></script>
<?php require_once 'views/footer.php'; ?>