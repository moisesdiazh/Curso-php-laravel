<?php
/* for */

$resultado = 0;

for($i = 0; $i <= 100; $i++){

$resultado = $resultado + $i;


}

echo "<h1>El resultado es: $resultado</h1>";

echo "<hr>";


if($_GET ['numero']){

    $numero = $_GET['numero'];
    
    }else{
    
    $numero = 1;    
    }
    
    
    echo "<h1>tabla de multiplicar $numero</h1>";
    $contador = 1;
    
   for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
   }





?>