<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
$error = '';

if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $genero = $_POST['genero'];
  $email = $_POST['email'];
  $fecha = $_POST['fecha'];
  $provincia = $_POST['provincia'];
  $parroquia = $_POST['parroquia'];
  $canton = $_POST['canton'];
  $contrasena = md5($_POST['contrasena']);
  $verificar_contrasena = md5($_POST['verificar_contrasena']);

  if($contrasena !== $verificar_contrasena){
    $error .= htmlentities('Las contraseñas no coinciden');
  }

  if($error == ''){
    $conn = new mysqli('localhost' , 'root' , '', 'sistema');
    if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);

    $query = "INSERT INTO usuario 
                    (nombre, 
                      apellidos, 
                      genero, 
                      email, 
                      fecha, 
                      provincia, 
                      parroquia, 
                      canton, 
                      contrasena)
                  VALUES (
                    '$nombre',
                    '$apellidos',
                    '$genero',
                    '$email',
                    '$fecha',
                    $provincia,
                    $parroquia,
                    $canton,
                    '$contrasena'
                    )";
    $result = $conn ->query($query);
    if (!$result) {
      $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
    }
    
    if($error == '') {
      http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
    }
  }

}