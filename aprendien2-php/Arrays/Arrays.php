<?php

$hola = "hola";
$weyes = array('Hola', 'Gabo', 'Jon');
$qlq = ['qlq', 'mano', 'todo', 'fine'];
//arrays asociativos
$bbsitas = array(
'nombre' => 'yari',
'apellidos' => 'jimenez',
'web' => 'google.com'
);


// recorer con for

echo "<h1> Listado de qlq </h1>";

echo "<ul>";

for($i = 0; $i <= count($weyes); $i++){
echo "<li>".$qlq[$i]."</li>";
}

echo "</ul>";


// recorrer con foreach
echo "<h1> Listado de weyes </h1>";

echo "<ul>";
foreach($weyes as $weye){

echo "<li>".$weye."</li>"; 
}
echo "</ul>";


//arrays multidimensionales

$contactos = array(
    array(
    'nombre' => 'yari',
    'email' => 'yarisita@gmail.com'
    ),
    array(
    'nombre' => 'antonio',
    'email' => 'antonio@gmail.com'
    ),
    array(
    'nombre' => 'calo',
    'email' => 'calo@gmail.com'

    ),
    
    );


    foreach($contactos as $contacto){

     echo var_dump($contacto);
    }


?>