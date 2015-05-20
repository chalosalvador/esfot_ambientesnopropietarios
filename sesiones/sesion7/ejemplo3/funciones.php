<?php

function generar_html(){
  echo '<html>';
  echo '<head>';
  echo '<title>Paises y capitales</title>';
  echo '<link rel="stylesheet" type="text/css" href="estilo.css">';
  echo '</head>';
  echo '<body>';
  // iterar sobre el arreglo y generar tabla
  generar_tabla();
  echo '</body>';
  echo '</html>';
}

function generar_tabla(){
  $paises_capitales = array(
    'Argentina' => 'Buenos Aires',
    'Bolivia' => 'La Paz',
    'Brasil' => 'Brasilia',
    'Chile' => 'Santiago',
    'Colombia' => 'Bogotá',
    'Ecuador' => 'Quito'
  );
  echo '<table>';
  echo '<tr>';
  echo '<td>Paises</td>';
  echo '<td>Capitales</td>';
  echo '</tr>';
  foreach( $paises_capitales as $pais => $capital ) {
    echo '<tr>';
    echo '<td>' . $pais . '</td>';
    echo '<td>' . $capital . '</td>';
    echo '</tr>';
  }
  echo '</table>';
}