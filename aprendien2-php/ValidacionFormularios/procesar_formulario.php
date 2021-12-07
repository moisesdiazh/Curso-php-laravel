<?php
$error = 'faltan_valores';
//empty es para verificar si una variable esta vacia, !empty es lo contrario
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && 
!empty($_POST['email']) && !empty($_POST['contraseña'])){

$error = 'ok';
//creacion de variables por get
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = (int)$_POST['edad'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

//validar nombre
if(!is_string($nombre) || preg_match ("/[0-9]+/", $nombre)){
    $error = 'nombre';
//validar apellido
}if(!is_string($apellido) || preg_match ("/[0-9]+/", $apellido)){
    $error = 'apellido';
//validar edad
}if(!is_int($edad) || !filter_var ($edad, FILTER_VALIDATE_INT)){
    $error = 'edad';
//validar email
}if(!is_string($email) || !filter_var ($email, FILTER_VALIDATE_EMAIL)){
    $error = 'email';   
//validar contraseña
}if(empty($contraseña) || strlen($contraseña)<5){
    $error = 'contraseña';   
}    

}else{

    $error = 'faltan_valores'; //en caso que no tenga ningun dato

}
if($error != 'ok'){ //en caso no estar ok te redirige al inicio

    header("Location:Validacion.php?error=$error");

}


?>


<!DOCTYPE HTML>

<html lang = "es">
<head>
<title>Validacion de formularios PHP</title>
<meta charset = "utf-8" />

</head>
<body>

<!-- pantalla con datos validados correctamente-->
<h1>Datos validados correctamente</h1>

<?php if($error == 'ok'): ?>
<p><?=$nombre?></p>
<p><?=$apellido?></p>
<p><?=$edad?></p>
<p><?=$email?></p>


<?php endif; ?>



</body>
</html>