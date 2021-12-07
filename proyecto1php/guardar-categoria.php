<?php

if(isset($_POST)){

//conexion a la base de datos
require_once 'includes/conexion.php';

$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

//arrays de errores
$errores = array();

//validar los datos antes de guardar en la base de datos


//validar nombre
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validado = true;
} else {
    $nombre_validado = false;
    $errores['nombre'] = "Los nombres no son validos"; 

}
//comprobando que no lleguen errores

if(count($errores) == 0){
$sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
$guardar = mysqli_query($db, $sql);

}

}

header('Location: index.php');
