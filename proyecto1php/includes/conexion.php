<?php

//conexion

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';


$db = mysqli_connect($server, $username, $password, $database, 3308);

mysqli_query($db, "SET NAMES 'utf8' ");


// Iniciar la sesion
if(!isset($_SESSION)){
	session_start();
}