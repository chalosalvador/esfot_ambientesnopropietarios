<?
# definimos dos variables numéricas asignandoles valores 
$a=23; 
$b=34;
/* Hacemos la suma y escribimos directamente los resultados utilizando las instrucciones print y echo */
Echo "La suma de $a+$b es: ".$a."+".$b."=".($a+$b);
echo "<BR>";

# guardamos el resultado en una nueva variable
$c=$a+$b;

/* ahora presentamos el resultado utilizando esa nueva variable */
echo "La suma de $a+$b es: ".$a."+".$b."=".$c;
echo "<BR>";

/* Modificamos ahora los valores de $a y $b comprobando que el cambio no modifica lo contenido en la variable $c */
$a=513; $b=648;
print "<br> C sigue valiendo: ".$c;
echo "<br>";
?>

