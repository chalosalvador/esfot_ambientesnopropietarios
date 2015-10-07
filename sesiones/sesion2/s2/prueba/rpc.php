<?php
if($_POST){
	$nombre = $_POST['nombre'];
	echo 'Hola ' . $nombre . ' desde el RPC';
}