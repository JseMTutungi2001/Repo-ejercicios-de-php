<?php

function lorem(){
    return
'<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Id assumenda in vel. Quaerat iusto, illum explicabo amet libero minima, culpa distinctio deserunt impedit ex quasi sapiente corporis alias placeat illo?
</p>';
}
function promedio($n1, $n2){
return ($n1+$n2)/2;

}
echo promedio(10,20);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

           <section>
                <?php echo lorem(); ?>
                <?php echo lorem(); ?>
                <?php echo lorem(); ?>
                <?php echo lorem(); ?>
                <?php echo lorem(); ?>
                <?php echo lorem(); ?>

           </section>
            <footer>
                <h1>
                    TODOS LOS DERECHOS RESERVADOS <?php echo date('Y'); ?>
                </h1>
            </footer>

</body>
</html>