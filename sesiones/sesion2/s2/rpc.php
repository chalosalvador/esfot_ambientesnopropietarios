<?php
if($_POST):
	$name = $_POST['name'];
	echo "Hola" . $name . " desde el RPC";
else:
	echo 'Por favor, envie su nombre';
endif;	