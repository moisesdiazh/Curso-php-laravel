<?php
//variables globales y locales

$frase = "Los maricos son sordos";

function Holaqlq(){
global $frase; //variable global
echo "<h1>$frase</h1>";

$year = 2019;
return $year;
}


echo Holaqlq();

echo "<hr>";

//funciones variables

function buenosDias(){
return "Hola buenos dias!";    
}
function buenasTardes(){
    return "qlq el mio!";    
}
function buenasNoches(){
    return "hablale fresa!";    
}

$horario = $_GET['horario'];
echo $horario();


?>