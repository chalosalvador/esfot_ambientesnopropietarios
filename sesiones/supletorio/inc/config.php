<?php

define('HOST','localhost');
define('BDD','supletorio');
define('USUARIO','anp');
define('CONTRASENA','12345');

function conectar_bd(){
  $conn = new mysqli(HOST, USUARIO, CONTRASENA, BDD);
  $conn->query('SET NAMES utf8');
  if($conn->connect_error) {
    echo "No se puede conectar a la BDD.";
    return false;
  }
  
  return $conn;
}

function get_provincias(){
  $conn = conectar_bd();

  $query = 'SELECT * FROM provincias';
  
  $result = $conn->query($query);

  if(!$result)
    return false;//echo ($conn->error);
    
  $num_rows = $result->num_rows;

  for($j = 0; $j < $num_rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $provincias[$row['cod_provincia']] = htmlentities($row['provincia']);
  }

  $result->close();
  $conn->close();

  return $provincias;
}
// echo "<pre>";
// print_r(get_cantones(1));
// echo "</pre>";
function get_cantones( $cod_provincia ){
  $conn = conectar_bd();

  $query = 'SELECT * FROM cantones WHERE cod_provincia = ' . $cod_provincia;
  
  $result = $conn->query($query);

  if(!$result)
    return false;//echo ($conn->error);
    
  $num_rows = $result->num_rows;

  for($j = 0; $j < $num_rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    $cantones[$row['cod_canton']] = htmlentities( $row['canton'] );
  }

  $result->close();
  $conn->close();

  return $cantones;
}

function get_parroquias( $cod_canton ){
  $conn = conectar_bd();

  $query = 'SELECT * FROM parroquias WHERE cod_canton = ' . $cod_canton;
  
  $result = $conn->query($query);

  if(!$result)
    return false;//echo ($conn->error);
    
  $num_rows = $result->num_rows;

  for($j = 0; $j < $num_rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $parroquias[$row['cod_parroquia']] = htmlentities( $row['parroquia'] );
  }

  $result->close();
  $conn->close();

  return $parroquias;
}
