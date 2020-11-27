<div id="sidemenu" class="menu-collapsed">
      <!-- HEADER -->
      <div id="header">
            <div id="title">
                  <span>MVC CARITAS</span>
            </div>
            <div id="menu-btn">
                  <div class="btn-hamburger"></div>
                  <div class="btn-hamburger"></div>
                  <div class="btn-hamburger"></div>

            </div>
      </div>
      <!-- HEADER -->

      <!-- PROFILE -->

      <div id="profile">
            <div id="photo"><img src="<?php echo constant('URL'); ?>/public/images/jose.jpg" alt=""></div>

            <div id="name"><span><?php echo $this->showNombreApellido(); ?></span></div>
      </div>

      <!-- PROFILE -->
      <!-- ITEMS -->
      <div id="menu-items">
            <div class="item">
                  <a href="<?php echo constant('URL'); ?>/inicio">
                        <div class="icon"><img src="<?php echo constant('URL'); ?>/public/images/home.png" alt="">
                        </div>
                        <div class="title"><span>Inicio</span></div>
                  </a>
            </div>
            <div class="item">
                  <a href="<?php echo constant('URL'); ?>/proyecto/crear">
                        <div class="icon"><img src="<?php echo constant('URL'); ?>/public/images/home.png" alt="">
                        </div>
                        <div class="title"><span>Crear proyecto</span></div>
                  </a>
            </div>
            <?php foreach ($this->showProyectos() as $proyecto) : ?>
            <div class="item" proyecto="<?php echo $proyecto->getId(); ?>">
                  <a href="<?php echo constant('URL'); ?>/proyecto/vista/<?php echo $proyecto->getId(); ?>">
                        <div class="icon"><img
                                    src="<?php echo constant('URL'); ?>/<?php echo $proyecto->getImagen(); ?>"
                                    alt="<?php echo $proyecto->getNombre(); ?>">
                        </div>
                        <div class="title"><span><?php echo $proyecto->getNombre(); ?></span></div>
                  </a>
            </div>
            <?php endforeach; ?>
      </div>
</div>

<div id="header-sitio">
      <h2 class="m-0">MVC CARITAS</h2>
</div>