<?php

/**
 * Crear o reanudar una sesión PHP
 * session_start()  crea una sesión o reanuda la actual basada en un 
 *                  identificador de sesión pasado mediante una petición GET o 
 *                  POST, o pasado mediante una cookie.
 *                  http://php.net/manual/es/function.session-start.php   
 */
session_start();

/**
 * Verificar si existe una sesión iniciada
 * isset( var ) Determina si una variable está definida y no es NULL.
 *              Devuelve TRUE si var existe y tiene un valor distinto de NULL, 
 *              FALSE de lo contrario.
 *              http://php.net/manual/es/function.isset.php
 *
 * $_SESSION  variable súper global que contiene las variables de sesión.
 *
 * header ( string ) Enviar encabezado sin formato HTTP.
 *                   Debe ser llamado antes de mostrar algo por pantalla.
 *                   http://php.net/manual/es/function.header.php
 */
if( isset( $_SESSION['username'] ) ){
  header( 'Location: inicio.php' );
  exit; // Nos aseguramos que el script se termina y no se ejecuta más código
}


/**
 * Destruimos toda la información de la sesión, esto lo hacemos aquí para 
 * evitar posibles duplicados de variables.
 * 
 * ini_get — Devuelve el valor de una directiva de configuración.
 *           http://php.net/manual/es/function.ini-get.php
 *
 * session_get_cookie_params — Obtener los parámetros de la cookie de sesión
 *              http://php.net/manual/es/function.session-get-cookie-params.php
 *
 * setcookie() define una cookie para ser enviada junto con el resto de las 
 *             cabeceras de HTTP.
 *             http://php.net/manual/es/function.setcookie.php
 *
 * session_destroy — Destruye toda la información registrada de una sesión.
 *                   http://php.net/manual/es/function.session-destroy.php
 */
$_SESSION = array(); // Eliminamos todas las variables de sesión

// Para destruir la sesión completamente, borramos también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if ( ini_get( "session.use_cookies" ) ) {
    $params = session_get_cookie_params();
    // En este caso eliminamos la cookie seteando el valor a vacío
    setcookie( session_name(), '', 0,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();