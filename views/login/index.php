<?php require_once 'views/header.php'; ?>

<div class="container-fluid fondoLogin"
      style="background: url(<?php echo constant('URL'); ?>/public/images/loginFondo.jpg);" imagen="">
      <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                  <div class="col-sm-8  col-md-6 col-lg-4">
                        <div class="card card-login">
                              <div class="card-header pb-0 pt-5">
                                    <img class="centrado-absoluto"
                                          src="<?php echo constant('URL'); ?>/public/images/icono-logo.png"
                                          alt="logo caritas">
                                    <h1 class="text-center ">Login</h1>
                              </div>
                              <div class="card-body pt-0 ">

                                    <form action="<?php echo constant('URL'); ?>/login/iniciarSesion" method="POST"
                                          class="d-block">

                                          <div class="form-group">
                                                <label for="">Usuario</label>
                                                <input type="text" class="form-control" required
                                                      placeholder="Ingrese su usuario" name="nickname">
                                          </div>

                                          <div class="form-group">
                                                <label for="">Contraseña</label>
                                                <input type="password" class="form-control" required
                                                      placeholder="Ingrese su contraseña" name="password">
                                          </div>

                                          <div class="form-group text-center">
                                                <?php $this->showMessages(); ?>
                                          </div>

                                          <div class="form-group text-center mb-0">
                                                <button class="btn btn-caritas" type="submit">
                                                      Iniciar sesión
                                                </button>
                                          </div>

                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

<?php require_once 'views/footer.php'; ?>