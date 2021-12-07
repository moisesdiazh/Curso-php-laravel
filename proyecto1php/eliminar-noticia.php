<?php
require_once 'includes/conexion.php';

if(isset($_SESSION['usuarios']) && isset($_GET['id'])){

$entrada_id = $_GET['id'];    
$usuario_id = $_SESSION['usuarios']['id'];
$sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id; ";
$borrar = mysqli_query($db, $sql);

mysqli_error($db);
}


header("Location: index.php");