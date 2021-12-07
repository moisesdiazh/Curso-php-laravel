<!DOCTYPE HTML>

<html lang = "es">
<head>
<title>Validacion de formularios PHP</title>
<meta charset = "utf-8" />

</head>
<body>

<h1> Validar formularios en php</h1>

<?php
if(isset($_GET['error'])){
$error = $_GET['error'];
if($error == 'faltan_valores'){ //mensajes de error en pantalla de inicio
    echo '<strong style="color:red">Introduce todos los datos en los campos respectivos</strong>';
}
if($error == 'nombre'){
    echo '<strong style="color:red">Introduzca su nombre solo con letras</strong>';
    
}if($error == 'apellido'){
    echo '<strong style="color:red">Introduce su apellido solo con letras</strong>';
}
if($error == 'edad'){
    echo '<strong style="color:red">Introduce solo numeros para la edad</strong>';   

}if($error == 'email'){
    echo '<strong style="color:red">Introduce correctamente el correo</strong>';  

}if($error == 'contraseña'){
    echo '<strong style="color:red">Introduce mas de 5 caracteres en la contraseña</strong>';  
}        
}





?>

<form method="POST" action="procesar_formulario.php">

<!--Nombres, require es para que sea obligatorio el campo y pattern para los limites--->

<label for="nombre"> Nombres </label><br/>
<input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

<!--Apellidos--->

<label for="apellido"> Apellidos </label><br/>
<input type="text" name="apellido" required="required" pattern="[A-Za-z]+"><br/>

<!--Edad--->

<label for="edad"> Edad </label><br/>
<input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

<!--Email--->

<label for="email"> Email </label><br/>
<input type="email" name="email"><br/>

<!--Contraseña--->

<label for="contraseña"> Contraseña </label><br/>
<input type="password" name="contraseña" required="required" minlength="5"><br/>

<!--Boton de Enviar--->
<br/>

<input type="submit" value="Enviar">



</form>


</body>
</html>
