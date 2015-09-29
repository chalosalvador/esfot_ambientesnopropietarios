<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$res="SELECT * FROM producto;";
$resultado=mysql_query($res);
while ($fila=mysql_fetch_array($resultado)) {
echo $fila['codigo'];
echo ", ";
echo $fila['descripcion'];
echo ", ";
echo $fila['pvp'];
echo ", ";
echo $fila['stock'];
echo "<br> ";
}
?>