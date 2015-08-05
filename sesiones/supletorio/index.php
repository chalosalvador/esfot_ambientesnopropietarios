<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ambientes no propietarios - Examen</title>

    <!-- Incluir los CSS necesarios bootstrap.min.css y estilos.css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    

  </head>
  <body>
    <!-- Escribir el código HTML del documento -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form>
            <fieldset>
              <legend>Ingrese sus datos:</legend>

              <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="" class="form-control">
              </div>

              <div class="form-group">
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" id="apellido" value="" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="" class="form-control">
              </div>

              <div class="form-group">
                <label for="provincia">Provincia: </label>
                <select name="provincia" id="provincia" class="form-control">
                  <option value="">Seleccione una provincia...</option>
                <?php
                  $lista_provincias = get_provincias();
                  // print_r($lista_paises);
                  foreach ($lista_provincias as $cod_provincia => $provincia) {
                    echo "<option value='$cod_provincia'>" . $provincia . "</option>";
                  }
                  
                ?>
                </select>
              </div>

              <div class="form-group">
                <label for="canton">Cantón: </label>
                <select name="canton" id="canton" class="form-control">
                  <option value="">Seleccione un cantón ...</option>
                </select>
              </div>

              <div class="form-group">
                <label for="parroquia">Parroquia: </label>
                <select name="parroquia" id="parroquia" class="form-control">
                  <option value="">Seleccione una parroquia...</option>
                </select>
              </div>

              <div class="form-group">
                <button name="guardar" id="guardar" class="btn btn-primary">Guardar</button>
                <button name="cancelar" id="cancelar" class="btn btn-danger">Cancelar</button>
              </div>
            </fieldset>
            
          </form>
        </div>
      </div>
    </div>

    <!-- Incluir jquery.js -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Incluir bootstrap.min.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Incluir jquery.validate.js -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <!-- Incluir main.js -->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>