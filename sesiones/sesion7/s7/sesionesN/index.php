<?php
include('p_index.php');
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
?>
 
<html>
   <head>
   <meta charset="utf-8">
    <title>Crear una sesión en PHP</title>
   </head>
   <body>
      <?php if($msg != '') : ?>
        <div><?php echo $msg; ?></div>
      <?php endif; ?>
     <h1>Creación de una sesión</h1>
     <form action="" method="POST">
       <p>
         <label>Email:</label>
         <input type="text" name="email" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="password" />
       </p>
       <p>
        <input type="submit" value="Crear sesión" />
       </p>
       <p><a href="registro.php">Registrarme</a></p>
     </form>
   </body>
</html>