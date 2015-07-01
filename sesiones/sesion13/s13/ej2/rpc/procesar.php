<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $msg = htmlentities($_POST['mensaje']);
  $noticias = htmlentities( $_POST['noticias'] );
  
  $conn = new mysqli($host, $usuario, $cont, $bdd);
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO mensajes(nombre,email,mensaje,noticias)
                  VALUES ('$name', '$email', '$msg', '$noticias')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}
echo json_encode( $result );
?>