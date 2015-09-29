<?
function conecta()
{
$MySQL_host = "localhost";
$MySQL_user = "juan";
$MySQL_password = "xxxxxxx";
mysql_connect($MySQL_host,$MySQL_user,$MySQL_password) or die("No ha podido realizarse la conexión con la base de datos");
}
function crea($basedatos)
{
mysql_create_db("$basedatos") or die("No se ha podido crear la base de datos");
}
function selecciona($basedatos)
{
mysql_select_db("$basedatos") or die("Error en la selección de la base de datos");
}
?>