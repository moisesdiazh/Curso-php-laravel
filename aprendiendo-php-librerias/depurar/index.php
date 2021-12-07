<?php

require_once '../vendor/autoload.php';

$frutas = array("manzanas", "peras", "culitos");

\FB::log($frutas);

$nombres = array("ejecutivo" => "Antonio", "empleado" => "juan");
\FB::log($nombres);

echo "Hola mundazo!!".$nombres['ejecutivo'];


\FB::log("Muestrame por consola");







//todo esto es con FIREPHP PARA DEPURAR

