<html>
  <head>
    <title>Hemos iniciado sesión</title>
  </head>
  <body>
    <div class="c1">
      <h2>Estos son los datos de sesión guardados</h2>
      <pre>
        <?php print_r($_SESSION); ?>
      </pre>
      <section>
        <p>Tu nombre de usuario es <?=$_SESSION['username'];?></p>
      </section>
    </div>
 
    <div class="c2">
      <section>
        <p>
          <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
        </p>
      </section>
   </div>
 </body>
</html>