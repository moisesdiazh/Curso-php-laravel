<?php

if (isset($_POST)) {

    //conexion a la base de datos
    require_once 'includes/conexion.php';
    //comprobando que exista lo que esta llegando
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuarios']['id'];
    //arrays de errores
    $errores = array();

    //validar los datos antes de guardar en la base de datos


    //validar nombre
    if (empty($titulo)) {
        $errores['titulo'] = "El titulo no es valido";
    }
    if (empty($descripcion)) {

        $errores['descripcion'] = "El texto no es valido";
    }
    if (empty($categoria) && !is_numeric($categoria)) {

        $errores['descripcion'] = "La categoria no es valida";
    }
    //comprobando que no lleguen errores y guardarlos
//usuario y categoria son numeros, van sin comillas 
    if (count($errores) == 0) {
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuarios']['id'];
            $sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria ".
            " WHERE id=$entrada_id AND usuario_id=$usuario_id;";

        }else{
            $sql = "INSERT INTO entradas VALUES(NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";

        }
        $guardar = mysqli_query($db, $sql);
        
        header('Location: index.php');

    } else {
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['editar'])){
            header('Location: editar-noticia.php?id='.$_GET['editar']);


        }else{
            header('Location: crear-titulo.php');

        }
    }

}
