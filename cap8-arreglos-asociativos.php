<?php
/* $ciudad=['cocuaima', 'chivacoa']; */
$ciudad[0] = [
'nombre' => 'Cocuaima',
'poblacion'=> 20];
$ciudad[1] = [
'nombre' => 'Chivacoa',
'poblacion'=> 100];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciudades</h1>
    <hr>
<?php

/* for($i=0;$i<=1;$i++){
    echo '<h2> Nombre: '.$ciudad[$i]['nombre'].'</h2>';
    echo '<h2> Población: '.$ciudad[$i]['poblacion'].'</h2>';
    echo '<hr>';
} */
foreach($ciudad as $valor){
    echo '<h2> Nombre: '.$valor['nombre'].'</h2>';
    echo '<h2> Población: '.$valor['poblacion'].'</h2>';
    echo '<hr>';

}

?>

</body>
</html>