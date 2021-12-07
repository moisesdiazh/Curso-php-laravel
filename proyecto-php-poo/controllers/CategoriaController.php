<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{


public function index(){

    Utils::isAdmin(); //funcion para verificar si es admin
    $categoria = new Categoria();

    $categorias = $categoria->getAll();

    require_once 'views/categoria/index.php';
}

public function ver(){

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        //conseguir la categoria
        $categoria = new Categoria();
        $categoria->setId($id);
        $categoria = $categoria->getOne();

        //conseguir productos

        $producto = new Producto();
        $producto->setCategoria_id($id);
        $productos = $producto->getAllCategory();
    }
    require_once 'views/categoria/ver.php';
}

public function crear(){

    Utils::isAdmin();//funcion para verificar si es admin
    require_once 'views/categoria/crear.php';
}

public function save(){

Utils::isAdmin();//funcion para verificar si es admin

//guardar la categoria en la bd
if(isset($_POST) && isset($_POST['nombre'])){
$categoria = new Categoria();

$categoria->setNombre($_POST['nombre']);

$save = $categoria->save();
}
header("Location:".base_url."categoria/index");

}
}