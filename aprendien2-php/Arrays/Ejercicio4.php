<?php

$matriz = array("Qlq", 8);
$titulo = "Master en php";
$numero = 1323;
$falso = false;

if(is_string($matriz)){

echo "<h1>Es un array</h1>";


}if(is_string($titulo)){

echo "<h1>$titulo</h1>";


}if(is_integer($numero)){

echo "<h1>$numero</h1>";

}if(is_bool($falso)){

echo "<h1>El booleano es falso</h1>";

}

?>