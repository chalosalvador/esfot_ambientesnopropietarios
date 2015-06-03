<?php
$conn = new mysqli($host, $usuario, $cont, $bdd);
if($conn->connect_error) 
  die($conn->connect_error);

echo '<pre>';
print_r($_POST);
echo '</pre>';

if($_POST){

  $aut = $_POST['autor'];
  $titulo = $_POST['titulo'];
  $tipo = $_POST['tipo'];
  $anio = $_POST['anio'];

  if($aut != '' && $titulo != '' && $tipo != '' && $anio != ''){
    $q_insert = "INSERT INTO clasicos(autor,titulo,tipo,anio)
                  VALUES ('$aut', '$titulo', '$tipo', '$anio')";

    $res = $conn->query($q_insert);

    if(!$res){
      echo '<div>Existi&oacute; un error al insertar.' . $conn->error . '</div>';
    } else {
      echo '<div>Libro insertado correctamente.</div>';
    }
  } else {
    echo '<div>Ingerese todos los campos.</div>';
  }
}


/* CARGAR DATOS */
$query = 'SELECT * FROM clasicos';
$result = $conn->query($query);
if(!$result) die($conn->error);

$num_rows = $result->num_rows;



?>

<html>
<head>
  <title>Libros</title>
</head>
<body>

<form method="post">
  <div><strong>Ingresar nuevo libro</strong></div>
  <div>
    <label for="autor">Autor: </label>
    <input type="text" name="autor" value="" id="autor">
  </div>
  <div>
    <label for="titulo">T&iacute;tulo: </label>
    <input type="text" name="titulo" value="" id="titulo">
  </div>
  <div>
    <label for="tipo">Tipo: </label>
    <input type="text" name="tipo" value="" id="tipo">
  </div>
  <div>
    <label for="anio">A&ntilde;o: </label>
    <input type="text" name="anio" value="" id="anio">
  </div>
  <div>
    <input type="submit" value="Ingresar" name="ingresar">
  </div>
</form>

<?php
echo'<table>';
echo'<tr>';
echo'<th>Autor</th>'; 
echo'<th>Titulo</th>'; 
echo'<th>Tipo</th>';
echo'<th>A&ntilde;o</th>'; 
echo'</tr>';
for($j = 0; $j < $num_rows; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);
echo'<tr>';
  echo '<td> ' . $row['autor'] . '</td>';
  echo '<td> ' . $row['titulo'] . '</td>';
  echo '<td> ' . $row['tipo'] . '</td>';
  echo '<td> ' . $row['anio'] . '</td>';
  echo '<td> 
  <form method="post">
  <input type="submit" value="Eliminar" name="eliminar">
  <input type="hidden" value="' . $row['id'] . '"  name="id">
  </form></td>';
  echo'</tr>';

}


echo '</table>';
$result->close();
$conn->close();

?>

</body>
</html>