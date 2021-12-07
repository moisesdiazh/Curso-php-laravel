<?php

//borrar cookies
if($_COOKIE['micookie']){

unset($_COOKIE['micookie']);

setcookie('micookie', '', time()-100);

}

// para redireccionar

//header es un modificador de cabecera

header('Location:ver_cookies.php');

?>