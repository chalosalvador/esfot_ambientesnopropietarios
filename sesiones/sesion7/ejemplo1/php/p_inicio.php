<?php
// Reanudamos la sesión creada
session_start();

/**
 * Creamos la variable de sesión
 * $_POST contiene todos los datos del formulario enviados por POST
 */
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
if( isset( $_POST['username'] ) ) {
  $_SESSION['username'] = $_POST['username'];
  header( 'Location: ' . $_SERVER['REQUEST_URI'] );
  exit;
}

// Si no hay una sesión creada, redireccionar al login.
if( !isset( $_SESSION['username'] ) ) {
  header( 'Location: index.php' );
  exit;
}