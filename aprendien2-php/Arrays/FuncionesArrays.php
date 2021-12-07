<?php
$futbolistas = ['Ronaldinho', 'Kaka', 'Messi', 'Suarez'];

// sort es para ordenar un array
sort($futbolistas);
var_dump ($futbolistas);


// añadir elementos al array
$futbolistas [] = "El wey";
array_push($futbolistas, "El malo");
//para eliminar el ultimo añadido
array_pop($futbolistas);

//para eliminar uno en especifico 
unset($futbolistas[0]);

var_dump ($futbolistas);

//aleatorio
$indice = array_rand($futbolistas);
echo $futbolistas[$indice];

//para dar la vuelta al array

var_dump(array_reverse ($futbolistas));

// para buscar en un array

$resultado = array_search('Messi', $futbolistas);
var_dump ($resultado);

// para contar numero de elementos del array

echo count($futbolistas);
echo "<br>";
echo sizeof($futbolistas);


?>