<?php


//funcion mostrar array

function mostrarArray($numeros){
$resultado = "";


    foreach($numeros as $numero){
    // $resultado = $resultado.$numero."</br>"; 
       $resultado .= $numero."</br>";  
 }
 return $resultado;

}

$numeros = array(22, 33, 11, 10, 99, 1, 33, 66);

echo "<h1> Listado de numeros </h1>";

echo "<hr>";

echo mostrarArray($numeros);


echo "<hr>";

echo "<h2>Ordenando numeros</h2>";

sort ($numeros);
echo mostrarArray($numeros);


echo "<hr>";

echo "<h2>Longitud de la lista<h2>";

echo count($numeros);

echo "<hr>";


if(isset($_GET['numero'])){

$busqueda = $_GET['numero'];

echo "<h3>Busqueda de un numero en el array<h3>";

$search = array_search($busqueda, $numeros);

if (!empty($search)){

echo "<h4>El numero buscado existe en el arreglo, en el indice: $search</h4>";

}else{

echo "<h4>No existe aquel numero en el arreglo</h4>";

}

}


?>