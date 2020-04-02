<?php

$a=3;
$b=4;

$c=$a+$b;
// los operadores aritmeticos son:
// + (mas) , - (menos) ,   * (Multiplicacion) , / (division) , % (modulo) , ** (exponenciacion).

// operadores logicos:
// ! (NOT/NO) , && (AND/Y) , || (OR/O).

//Operadores de comparacion:
// == (igual) , === (identico) , != (Diferente) , <> (DIferente) , !== (NO Identico) , <(menor que ) , > (mayor que) , <= (Menor o igual) , >= (Mayor o igual) , <=> (Nave espacial {no se que es eso pero aja lo investigare luego})

echo $c . '</br></br>';

if($a<$b){
echo ' Es verdadero </br></br>';

}else{
    echo ' Es falso </br></br>';
}

$a='4';
if($a===$b){
    echo ' Es verdadero </br></br>';
    
    }else{
        echo ' Es falso </br></br>';
    }
'</br></br>';
    if($a==$b){
        echo ' Es verdadero </br></br>';
        
        }else{
            echo ' Es falso </br></br>';
        }

$a=3;
$z=5;
if($z>$b && $z>$a){
    echo ' Z es mayor que (a) y (b) </br></br>';
    
    }else{
        echo ' Z no es mayor que (a) y (b)  </br></br>';
    }   
    if($z>$b || $z<$a){
        echo ' Z es mayor que (a) o (b) </br></br>';
        
        }else{
            echo ' Z no es mayor que (a) o (b)  </br></br>';
        }   

// Operador de incremento o decremento
//se puede  hacer de dos formas $a = $a+1. o $a++ y decremento es igual. $a= $a-1 o $a--
$a++;
$a++;
echo $a . '</br></br>';



?>