<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$res2="SELECT descripcion FROM producto WHERE codproducto='A0001';";
$resultado2=mysql_query($res2);
$descripcion=mysql_result($resultado2,0);
echo $descripcion;
?>