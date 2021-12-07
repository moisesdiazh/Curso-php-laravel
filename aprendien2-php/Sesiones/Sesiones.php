<?php

//sesiones y cookies

//INICIAR SESION
session_start();


//VARIABLE LOCAL
$variable_normal = "Soy una cadena de texto";



//VARIABLE DE SESION
$_SESSION ['variable_persistente'] = "hola, soy una sesion activa";

echo $variable_normal."<br/>";

echo $_SESSION ['variable_persistente'];

?>
