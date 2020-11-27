<?php require_once 'views/header.php'; ?>
<h1>Error 404</h1>
<form action="<?php echo constant('URL'); ?>/usuarios/crearUsuario" method="post">
      <input type="text" name="nombre_usu" placeholder="nombre">
      <input type="text" name="apellido_usu" placeholder="apellido">
      <input type="text" name="cedula_usu" placeholder="cedula">
      <input type="text" name="correo_usu" placeholder="correo">
      <input type="text" name="nickname" placeholder="nickname">
      <input type="text" name="password" placeholder="password">
      <input type="text" name="rol_id" placeholder="rol" value="1">
      <button type="submit">enviar</button>
</form>
<?php require_once 'views/footer.php'; ?>