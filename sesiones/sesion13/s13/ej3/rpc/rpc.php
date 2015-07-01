<?php
  $respuesta = "";
  if($_POST){
    $nombre = $_POST['nombre'];

    if($nombre == "Juan"){
      $respuesta = 'No se permite el ingreso';
    } else{
      $respuesta = 'Acceso permitido';
    }
  }

echo $respuesta;