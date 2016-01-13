<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// print_r($provincias);

$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

$usuarios;

$result ->close();
$conn ->close();
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8"> 
<title> Deber 9</title>
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
<div id="mensaje" class="alert"></div>

<div id ="form">
<p id ='titulo1'><b>Registrate</b></p>
<p id = 'titulo1'> Es gratis(y lo seguira siendo).</p>
<form action="" method='POST' id="usuario" novalidate="novalidate">
<table>
<tr>
<div id="fila1">
<td>
<label for="Nombre">Nombre</label>
</td>
<td>
<input type="text" id="txtnombre" value="" name="nombre">
</td>
</div>
</tr>
<tr>
<div id="fila2">
<td>
<label for="Email">Email</label>
</td>
<td>
<input type="text" id="txtemail" value="" name="email">
</td>
</div>
</tr>
<tr>
<td>
<label for="telefono">Telefono</label>
</td>
<td>
<input type="text" id="txtfono" value="" name="telefono">
</td>
</tr>
<tr>
<td>
<label for="direccion">Dirección</label>
</td>
<td>
<input type="text" id="txtdir" value="" name="direccion">
</td>
</tr>

<tr>
<td>
<label for="provincia">Provincia</label>
</td>
<td>
<select id="txtprovincia" name="provincia">
  <option value="">Seleccione...</option>
<?php
  foreach($provincias as $pr){
    echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
  }

?>
</select>
</td>
</tr>

<tr>
<td>
<label for="canton">Cantón</label>
</td>
<td>
<select id="txtcanton" name="canton">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="parroquia">Parroquia</label>
</td>
<td>
<select id="txtparroquia" name="parroquia">
  <option value="">Seleccione...</option>
</select>
</td>
</tr>

<tr>
<td>
<label for="usuario">Usuario</label>
</td>
<td>
<input type="text" id="txtusuario" value="" name="usuario">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia" value="" name="contrasenia">
</td>
</tr>
<tr>
<td>
<label for="contrasenia">Verificar Contraseña</label>
</td>
<td>
<input type="password" id="contrasenia2" value="" name="contrasenia2">
</td>
</tr>

</table>
<button  id="btnRegistrar" name="registrar"> Registrate</button>
</form>
</div>

<table id="tabla_usuarios">
  <th>
    <td>Nombre</td>
    <td>Email</td>
    <td>Direccion</td>
    <td>Usuario</td>
  </th>

  <?php
  $contador = 0;
  foreach ($usuarios as $usuario) {

    echo '<tr>';
    echo '<td id="nombre' . $contador . '">Nombre1</td>';
    echo '<td id="email' . $contador . '">Email1</td>';
    echo '<td>Direccion1</td>';
    echo '<td>Usuario1</td>';
  </tr>

  $contador++;
  }
  ?>
  
  <tr>
    <td>Nombre2</td>
    <td>Email2</td>
    <td>Direccion2</td>
    <td>Usuario2</td>
  </tr>
</table>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>