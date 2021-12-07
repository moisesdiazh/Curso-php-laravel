<?php

require_once 'coche.php';

$coche = new Coche ("Amarillo", "kia", "250", "motors", "20", "3");
$coche1 = new Coche ("Azul", "chevrolet", "330", "feo", "40", "2");
$coche2 = new Coche ("Fucsia", "Renault", "220", "veit", "30", "1");
$coche3 = new Coche ("Rojo", "Volkswagen", "100", "Gol", "45", "4");

$coche->color = "Rosa";
$coche->setMarca("Seat");

echo $coche->mostrarInformacion($coche);


//var_dump($coche->getModelo());

//var_dump($coche);

