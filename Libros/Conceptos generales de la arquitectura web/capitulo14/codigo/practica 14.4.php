<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$tabla="CREATE TABLE producto (codproducto VARCHAR(20) PRIMARY KEY, descripcion VARCHAR(200), precio DOUBLE);";
mysql_query($tabla) or die("No se ha podido crear la tabla");
?>