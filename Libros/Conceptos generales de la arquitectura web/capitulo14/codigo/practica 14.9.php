<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$res2="DELETE FROM producto WHERE codproducto='A0003';";
mysql_query($res2) or die("No se ha podido actualizar la tabla");
?>