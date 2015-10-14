<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}


table, th, td{
  border: 1px solid #000000;
  border-collapse: collapse;
}

table tr:nth-child(even){
  background-color: #15efe8; 
}

table tr:nth-child(odd){
  background-color: #dddddd; 
}
';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es genera .... (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '</ol>';

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}

echo '</tbody>';



echo '</table>';
echo '</body>';
echo '</html>';