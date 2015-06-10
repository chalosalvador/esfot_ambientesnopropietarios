<?php
if($_POST){
  $user = $_POST['usuario'];
  $cont = $_POST['cont'];
  $query = "SELECT * FROM usuarios
          WHERE usuario='$user'
          AND contrasena = '$cont' ";

  echo $query;          
}
?>
<html>
  <head><title>Link Test</title></head>
  <body>
    <form method="post" onsubmit="return validar(this)">
      <div>
        <label>Usuario</label>
        <input type="text" name="usuario" id="usuario" value="">
      </div>

      <div>
        <label>Contrasena</label>
        <input type="text" name="cont" id="cont" value="">
      </div>

      <div>
        <textarea name="com"></textarea>
      </div>

      <?php
      if($_POST){
        echo htmlentities( $_POST['com'] );
      }
      ?>

      <input type="submit" value="Enviar">
    </form>
    <script type="text/javascript" src="validacion.js"></script>
  </body>
</html>