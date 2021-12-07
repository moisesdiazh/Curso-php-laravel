<h1>Bienvenidos al beta</h1>

<?php

//require de los controllers para poder utilizarlos en el index
require_once 'autoload.php';


//la parte visual del mvc
if (isset($_GET['controller'])) {

    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {

    echo "No existe la pagina que busca";
    exit();
}

//SE COMPRUEBA QUE EXISTE LA CLASE CONTROLLER Y SI SE COMPRUEBA MEDIANTE EL PARAMETRO GET POR LA URL
// , PASA A LA ACCION
if (class_exists($nombre_controlador)) {


    $controlador = new $nombre_controlador;

    //AQUI VERIFICAMOS QUE LA ACCION DEL CONTROLLER EXISTE Y EL METODO, DE ESTA MANERA NOS FUERZA A PASARLO POR URL
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {

        $action = $_GET['action'];
        $controlador->$action();
    } else {

        echo "No existe la pagina que busca";
    }
} else {

    echo "La pagina no existe";
}
