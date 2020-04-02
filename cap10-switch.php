<?php
$eleccion='Pizza';
switch($eleccion){
    case 'Helado':
        echo 'El costo de el Helado es de $2000';
    break;
    case 'Pizza':
        echo 'El costo de la Pizza es de $5000';
    break;
    case 'Torta':
        echo 'El costo de la Torta es de $3000';
    break;
   default:
        echo 'Opcion no valida';
    break;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ingresa una opcion</h1>    
<br>
<h2>Helado</h2>
<h2>pizza</h2>
<h2>Torta</h2>

</body>
</html>
