<?php
// variabes predefinidas

//para debuggear 
$nombre = "Moises";
var_dump ($nombre);


// fechas

echo date('d-m-y');
echo "<br/>";
// Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br/>";
echo "numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br/>";
echo "Numero pi: ".pi();
echo "<br/>";
echo "Redondeo: ".round(7.435352, 2); // para redondeo

echo "<hr>";

//mas funciones generales

echo gettype($nombre);  //gettype es para ver que tipo de variable es


// variable isset comprueba si existe una variable como la que estas colocando
echo "<br/>";
if(isset($nombre)){
echo "La variable existe";

}else{

echo "La variable no existe";

}
echo "<br/>";
// trim se usa para sanear las variables o mejor dicho, limpiarlas

$frase = "             mi contenido             ";
var_dump(trim($frase));

echo (trim($frase));

echo "<hr>";

// eliminar variables o indices

$year = 2020;
unset($year);
echo "<br/>";
// comprobar si la variable esta vacia o es 0

$texto = "";
if(empty($texto)){
echo "La variable esta vacia";

}else{
echo "La variable tiene contenido";

}
echo "<br/>";
//contar caracteres de un string

$cadena = "123123213";
echo strlen($cadena);
echo "<br/>";

// encontrar caracter 

$frase = "qlq el mio feo";

echo strpos($frase, "q");
echo "<br/>";

//reemplazar palabras de un string
$frase = str_replace("qlq", "mamaguevo", $frase);
echo $frase;
echo "<br/>";

//mayuscula y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);






?>