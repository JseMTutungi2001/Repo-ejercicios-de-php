<?php
$i = 0;

while($i<10){
echo $i . '</br>';

    $i++;
}

$i=1;

echo '</br> </br>';

do{
echo $i . '</br>';
$i++;
}while($i<10);
echo 'fin del ciclo';

//¿cual es la diferencia?

echo '</br> </br>';
$i=1;
do{
echo $i . '</br>';
$i++;
}while($i=0);
echo'fin del ciclo';
// que en el do while el ciclo se realiza aunque sea una ves y luego es que se ejecuta la condicion
// esto se usa màs que todo cuando no sabemos cuantas veces se va a ejecutar el ciclo por ejemplo cuando depende del usuario que se cumpla la condicion o el valor de la condicion
?>