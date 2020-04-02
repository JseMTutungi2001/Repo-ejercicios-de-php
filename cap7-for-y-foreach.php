<?php
$nombre= 'Jose';
$animales =['Perro', 'Gato','Tigre'];
// los arreglos pueden se pueden declarar tambien asi:
// $animales=array('perro', 'gato','tigre');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For y Foreach</title>
</head>
<body>

<?php

/* echo '<h2>Hola '. $nombre.' </br> </br> ¿Cual es tu animal favorito? </br> </br>'.

'Mi animal favorito es el:'.$animales[1]. '<br><br>pero mis animales favoritos son:</h2>';

for($i=0;$i<3;$i++){
    echo '<br><h1> El '. $animales[$i].'</h1>';

} */

//ahora el foreach funciona asi es muy parecido al for

echo '</br></br><h2>Hola '. $nombre.' </br> </br> ¿Cual es tu animal favorito? </br> </br>'.

'Mi animal favorito es el: '.$animales[1]. '<br><br> pero mis animales favoritos son: </h2>';

foreach($animales as $valor){
 echo   '<h2> El '. $valor.', </h2>';

} 


?>
</body>
</html>