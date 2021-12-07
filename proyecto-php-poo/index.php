<?php

ob_start();
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


//require de los controllers para poder utilizarlos en el index


//CONEXION BASE DE DATOS
$db = Database::connect();

function show_error()
{

    $error = new errorController();
    $error->index();
}


if (isset($_GET['controller'])) { //comprobando si llega el controlador por la url

    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) { //en caso que no existe lo manda al index

    $nombre_controlador = controller_default;
}else{
	show_error();
	exit();
}

//SE COMPRUEBA QUE EXISTE LA CLASE CONTROLLER Y SI SE COMPRUEBA MEDIANTE EL PARAMETRO GET POR LA URL
// , PASA A LA ACCION
if(class_exists($nombre_controlador)){
    
    
	$controlador = new $nombre_controlador();

    //AQUI VERIFICAMOS QUE LA ACCION DEL CONTROLLER EXISTE Y EL METODO, DE ESTA MANERA NOS FUERZA A PASARLO POR URL
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

require_once 'views/layout/footer.php';