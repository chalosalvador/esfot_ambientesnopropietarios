<?php

if($_POST){

  $canton = $_POST['canton'];

  $conn = new mysqli('localhost' , 'root' , '', 'registro');
      
      if ($conn->connect_error) die($conn ->connect_error);

      $query = "SELECT * FROM parroquias WHERE cod_canton = '$canton'";
      
      $result = $conn ->query($query);
      
      if (!$result) die($conn ->error);

      $rows = $result ->num_rows;
      
      $parroquias = array();

      for ($j = 0 ; $j < $rows ; ++$j){
        $result ->data_seek($j);
        $parroquias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  // print_r($cantones);

  $options = "";
  foreach ($parroquias as $parroquia) {
    $options .= '<option value="' . $parroquia['cod_parroquia'] . '">' . $parroquia["parroquia"] . '</option>';
  }

  echo $options;

  $result ->close();
  $conn ->close();

  
} else {
  echo "No se han recibido datos";
}  

?>