<?php

if($_POST){

  $provincia = $_POST['provincia'];

  $conn = new mysqli('localhost' , 'root' , '', 'registro');
      
      if ($conn->connect_error) die($conn ->connect_error);

      $query = "SELECT * FROM cantones WHERE cod_provincia = '$provincia'";
      
      $result = $conn ->query($query);
      
      if (!$result) die($conn ->error);

      $rows = $result ->num_rows;
      
      $cantones = array();

      for ($j = 0 ; $j < $rows ; ++$j){
        $result ->data_seek($j);
        $cantones[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  // print_r($cantones);

  $options = "";
  foreach ($cantones as $canton) {
    $options .= '<option value="' . $canton['cod_canton'] . '">' . $canton["canton"] . '</option>';
  }

  echo $options;

  $result ->close();
  $conn ->close();

  
} else {
  echo "No se han recibido datos";
}  

?>