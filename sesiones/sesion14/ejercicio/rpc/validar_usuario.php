<?php

if($_POST){

	$usuario=$_POST['usuario'];

	
	$enlace = mysql_connect("localhost", "root", "");
      mysql_select_db("registro", $enlace);
  
  	 $q_select= "SELECT * from usuario where usuario='$usuario'";
  	 $resultado = mysql_query($q_select, $enlace);
     
     $filas_usuario = mysql_num_rows($resultado);
     if($filas_usuario>0){
    echo "false";
     }
     else{
    echo "true";
}
}
    else{

      echo "No se han recibido datos";
    }  

?>