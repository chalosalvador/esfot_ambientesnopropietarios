<?php

$conn = new mysqli('localhost' , 'root' , '', 'sistema');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM usuario";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $row = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  // echo '<pre>';
  // print_r($row);
  // echo '</pre>';
  echo 'Nombre: ' . $row['nombre'] . '<br>';
  echo 'Apellidos: ' . $row['apellidos'] . '<br>';
  echo 'Email: ' . $row['email'] . '<br>';
  echo 'Fecha: ' . $row['fecha'] . '<br>';
}
$result ->close();
$conn ->close();