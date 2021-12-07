<?php

//se usa el mismo formato de registro.php pero se quita la password

if (isset($_POST)) {

    //conexion a la base de datos
    require_once 'includes/conexion.php';



    //operadores ternarios se usan para comprobar que lleguen los datos
    // se traduce como si la variable existe ejemplo "nombres" es verdadero y si no existe o es erroneo "?" es igual a falso
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ?  mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db, $_POST['email']) : false;
    // actualizacion de los datos
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
        $errores['apellidos'] = "Los apellidos no son validos";
    } //validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        //comprobar si el email ya existe
$sql = "SELECT id, email from usuarios WHERE email = '$email'";
$isset_email = mysqli_query($db, $sql);
$isset_user = mysqli_fetch_assoc($isset_email);

      if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
        //actualizar usuarios en la base de datos
        $usuario = $_SESSION['usuarios'];
        $sql = "UPDATE usuarios SET " .
            //Las variables $nombre $apellidos y $email ya estan guardadas en las variables en las que guardamos
            //los datos que llegaron pos POST por lo tanto las llamamos en la consulta de esta manera
            "nombre = '$nombre', " .
            "apellidos = '$apellidos', " .
            "email = '$email' " .
            "WHERE id = " . $usuario['id'];



        $guardar = mysqli_query($db, $sql);


        if ($guardar) {

            $_SESSION['usuarios']['nombre'] = $nombre;
            $_SESSION['usuarios']['apellidos'] = $apellidos;
            $_SESSION['usuarios']['email'] = $email;




            $_SESSION['completado'] = "Tus datos se han actualizado con exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el actualizar tus datos!";
        }
    }else{
        $_SESSION['errores']['general'] = "El usuario ya existe!";


    }
    } else {

        $_SESSION['errores'] = $errores;
    }
    
}


header('Location: mis-datos.php');
