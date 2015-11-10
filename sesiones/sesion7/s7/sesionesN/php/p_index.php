<?php

if($_POST){
  $email = $_POST['email'];
  // verificar si el campo no está vacio
  // verificamos que el campo contrasena no este vacio

  // verificamos que el usuario exista en la BDD
  // si el usuario existe en la BDD traemos la contrasena
  // verificar que la contrasena ingresada coincida con la almacenada en la BDD

  // Si las contrasenas coinciden podemos iniciar sesion
  $_SESSION['email'] = $email;
}

if(isset( $_SESSION['email'] )) {
  http_redirect('inicio.php');
}

$msg = (isset($_GET['exito']) ? $_GET['exito'] : '');