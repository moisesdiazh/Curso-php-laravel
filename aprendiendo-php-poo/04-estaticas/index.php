<?php

require_once 'configuracion.php';

Configuracion::setColor("azul");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color. '</br>';
echo Configuracion::$entorno. '</br>';
echo Configuracion::$newsletter. '</br>';

$configuracion = new configuracion();
$configuracion::$color = "rojo";
echo $configuracion::$color;


var_dump($configuracion);

