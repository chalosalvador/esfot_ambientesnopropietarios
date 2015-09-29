<?
$MySQL_host = "MySQL2.000webhost.com";
$MySQL_database = "prueba";
$MySQL_user = "a5953119";
$MySQL_password = "xxxxxxx";
$conexion = mysql_connect($MySQL_host,$MySQL_user,$MySQL_password) or die("No ha podido realizarse la conexión");
mysql_select_db($MySQL_database) or die("No ha podido seleccionarse la base de datos");
?>