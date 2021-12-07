<?php


if (isset($_POST)) {

    //conexion a la base de datos
    require_once 'includes/conexion.php';

    //iniciando sesion
    if (isset($_SESSION)) {
        session_start();
    }

    //operadores ternarios se usan para comprobar que lleguen los datos
    // se traduce como si la variable existe ejemplo "nombres" es verdadero y si no existe o es erroneo "?" es igual a falso
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ?  mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $password = isset($_POST['password']) ?  mysqli_real_escape_string($db, trim($_POST['password'])) : false;
    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db, $_POST['email']) : false;

   // mysqli_real_escape_string se usa para dejar escapar y que no puedan cifrar o joder la base de datos


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
    //validar apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellido'] = "Los apellidos no son validos";
    } //validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    } //validar password
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;

        //cifrando las contraseñas
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);



        //insertar usuarios en la base de datos
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);


        if ($guardar) {

            $_SESSION['completado'] = "El registro se ha completado con exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!";
        }
    } else {

        $_SESSION['errores'] = $errores;
    }
}

header('Location: index.php');
