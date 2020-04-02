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
    <title>Arreglos y mezclar html y php</title>
</head>
<body>
    
<h1> Hola
<?php
echo $nombre;
?>
</h1>
<h2>
¿Cual es tu animal favorito?
</br></br>
Mi animal favorito es el:
<?php
echo $animales[1];
?>

</h2>
<br>
<h2>pero mis animales favoritos son:</h2>

<?php
$i=0;
while($i<3){
echo '<br><h1> El '. $animales[$i].'</h1>
';
$i++;
}

?>
</body>
</html>