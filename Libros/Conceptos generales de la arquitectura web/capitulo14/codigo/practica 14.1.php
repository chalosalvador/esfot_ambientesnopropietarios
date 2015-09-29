<?
$MySQL_host = "localhost";
$MySQL_database = "prueba";
$MySQL_user = "juan";
$MySQL_password = "xxxxxxx";
$conexion = mysql_connect($MySQL_host,$MySQL_user,$MySQL_password) or die("No ha podido realizarse la conexión");
mysql_select_db($MySQL_database) or die("No ha podido seleccionarse la base de datos");
?>