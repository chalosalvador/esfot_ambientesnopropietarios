<?php
function print_arr( $arr ){
  echo '<pre>';
  print_r( $arr );
  echo '</pre>';  
}

  
function determinar_mes( $dia ){
  if( $dia < 1 || $dia > 365 ){
    throw new Exception("Día no válido", 1);
  }


  if( $dia > 0 && $dia <= 31 ){
    $mes = 'Enero';
  }elseif( $dia > 31 && $dia <= 59 ){
    $mes = 'Febrero';
  }elseif( $dia > 59 && $dia <= 90 ){
    $mes = 'Marzo';
  }elseif( $dia > 90 && $dia <= 120 ){
    $mes = 'Abril';
  }elseif( $dia > 120 && $dia <= 151 ){
    $mes = 'Mayo';
  }elseif( $dia > 151 && $dia <= 181 ){
    $mes = 'Junio';
  }elseif( $dia > 181 && $dia <= 212 ){
    $mes = 'Julio';
  }elseif( $dia > 212 && $dia <= 243 ){
    $mes = 'Agosto';
  }elseif( $dia > 243 && $dia <= 273 ){
    $mes = 'Septiembre';
  }elseif( $dia > 273 && $dia <= 304 ){
    $mes = 'Octubre';
  }elseif( $dia > 304 && $dia <= 334 ){
    $mes = 'Noviembre';
  }else{
    $mes = 'Diciembre';
  }

  return $mes;
}

function generar_lista(){
  $dias = array();
  for( $i = 1; $i <=365; $i ++ ) {
    $dias[] = $i;
  }
  
  $mes_dia = array();
  for( $i = 0; $i < 365; $i++ ) {
    $mes_dia[determinar_mes( $dias[$i] )][] = $dias[$i];
  }

  echo '<ul>';
  foreach( $mes_dia as $m => $dias ){
    echo '<li class="' . strtolower( $m ) . '">';
    echo '<div class="mes">' . $m . '</div>';
    echo '<ul>';
    foreach ($dias as $d) {
      echo '<li>';
      echo $d;
      echo '</li>';
    }
    echo '</ul>';
    echo '</li>';

  }
  echo '</ul>';
}
// try{
//   determinar_mes( -1 );
// } catch(Exception $e){
//   print_r($e->getMessage());
// }



// print_arr( $mes_dia );
?>