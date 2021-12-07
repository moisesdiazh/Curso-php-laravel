<?php 

//para ver las cookies


if(isset($_COOKIE['micookie'])){

echo "<h1>".$_COOKIE['micookie']."</h1>";


}else{

echo "<h1>No existe la cookie</h1>";


}

if(isset($_COOKIE['unyear'])){

echo "<h1>".$_COOKIE['unyear']."</h1>";

}else{

echo "<h1>No existe la cookie</h1>";

}
?>
<a href = "CrearCookies.php">Seleccionar para crear Cookies</a>
<a href = "BorrarCookies.php">Seleccionar para borrar Cookies</a>
