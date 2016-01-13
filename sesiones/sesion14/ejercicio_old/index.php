<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>Ejercicio sesion14</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Usuarios</h4>
        <div id="success" class="alert alert-success hidden"></div>
        <div id="error" class="alert alert-danger hidden"></div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-offset-1 col-md-4">
            <form id="registro_usuarios">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
              </div>
              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion">
              </div>
              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="text" id="contrasena" name="contrasena" class="form-control" placeholder="Contrasena">
              </div>
              <div class="form-group">
                <label for="verificar_contrasena">Verificar Contraseña</label>
                <input type="text" id="verificar_contrasena" name="verificar_contrasena" class="form-control" placeholder="verificar_contrasena">
              </div>

              
                <button id="guardar" name="guardar" class="btn btn-primary btn-lg">Guardar</button>
              
            </form>
        </div>
    
    
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>