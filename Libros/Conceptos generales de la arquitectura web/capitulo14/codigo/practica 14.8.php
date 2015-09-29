<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$mod1="UPDATE producto SET descripcion='Placa Base Asus P8H61-M LX' WHERE codproducto='A0002';";
mysql_query($mod1) or die("No se ha podido actualizar la tabla");
$mod2="UPDATE producto SET precio=48.00 WHERE codigo='A0002';";
mysql_query($mod2) or die("No se ha podido actualizar la tabla");
?>