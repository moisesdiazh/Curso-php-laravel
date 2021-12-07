<?php

// conectar la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql", 3308);



//comprobar  si la conexion es correcta

if(mysqli_connect_errno()){

echo "La conexion a la base de datos MYSQL ha fallado: ".mysqli_connect_error();


}else{

echo "conexion realizada con exito";


}

// consulta para configurar la codificacion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");


// consulta select desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");


//si quiero que me recorra todas las notas

while($notas = mysqli_fetch_assoc($query)){

//var_dump($notas);

echo '<h2>'.$notas['titulo'].'</h2>';
echo  $notas['descripcion'].'<br/>';


//insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null, 'notadesdephp', 'Esto es una nota qlq', 'black')";
$insert = mysqli_query($conexion, $sql);

if($insert){

echo "datos insertados correctamente";

}else{

echo "Error: ".mysqli_error($conexion);    





}


}



?>