<?
include "funcionesbd.inc.php";
conecta();
selecciona("bdprueba");
$insertar="INSERT INTO PRODUCTO VALUES ('A0001','caja atx fuente 500 watt',25.30), 
('A0002','placa base intel p5g41t-m lx',36.00),('A0003','procesador intel celeron e3100',25.00);";
mysql_query($insertar) or die("No se ha podido crear la tabla");
?>