<?php
include('./php/p_index.php');
?>
 
<html>
   <head>
    <title>Crear una sesión en PHP</title>
   </head>
   <body>
     <h1>Creación de una sesión</h1>
     <form action="./inicio.php" method="POST">
       <p>
         <label>Nombre de usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="password" />
       </p>
       <p>
        <input type="submit" value="Crear sesión" />
       </p>
     </form>
   </body>
</html>