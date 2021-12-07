<?php

//mostrar contador por url y aumentarlo o disminuirlo

session_start(); //iniiamos sesion

if(!isset($_SESSION["numero"])){

$_SESSION ['numero'] = 0; //variable de inicio // creacion
}
if(isset($_GET['counter']) && $_GET['counter']== 1){ //aumentar el numero en pantalla

$_SESSION ['numero']++;

}if(isset($_GET['counter']) && $_GET['counter']== 0){ //dismunir el numero en pantalla

$_SESSION ['numero']--;
}

?>

<h1>El valor de la sesion numero es: <?= $_SESSION['numero']?></h1>

<a href = "Ejercicio1.php?counter=1">Aumentar el valor </a></br>

<a href = "Ejercicio1.php?counter=0">Disminuir el valor </a>


