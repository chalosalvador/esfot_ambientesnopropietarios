<?php
/**
 * Redirige a la URL especificada
 */
function http_redirect( $url ){
  header( 'Location: ' . DOCUMENT_ROOT_RELATIVA . $url );
  exit;
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
function cerrar_sesion() {
  $_SESSION = array();

  // Si se desea destruir la sesión completamente, borre también la cookie de 
  // sesión.
  // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
  if ( ini_get( "session.use_cookies" ) ) {
      $params = session_get_cookie_params();
      setcookie( session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  session_destroy();
}