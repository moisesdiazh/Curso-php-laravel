<?php


//sirve para resumir lo que son los require y solo hacer un solo require,
// de esta manera colocamos los fichos que se quieren utilizar a uno solo "clases"
// Se realiza el autoload para que pueda recorrer todos los requires en la carpeta


require_once 'autoload.php';


//  $usuario = new Usuario();
// echo $usuario->nombre;
// echo "<br>";
// echo $usuario->email;
// echo "<br>";


// $categoria = new Categoria();
// echo $categoria->nombre;
// echo "<br>";
// echo $categoria->descripcion;
// echo "<br>";


// $entrada = new Entrada();
// echo $entrada->titulo;
// echo "<br>";
// echo $entrada->fecha; 

//estamos usando los namespace

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal
{

  public $usuario;
  public $categoria;
  public $entrada;

  public function __construct()
  {

    $this->usuario = new Usuario();
    $this->categoria = new Categoria();
    $this->entrada = new Entrada();
  }

  function getUsuario()
  {

    return $this->entrada;
  }

  function getCategoria()
  {

    return $this->entrada;
  }

  function getEntrada()
  {

    return $this->entrada;
  }

  function setUsuario($usuario)
  {

    $this->usuario = $usuario;
  }

  function setCategoria($categoria)
  {

    $this->categoria = $categoria;
  }

  function setEntrada($entrada)
  {

    $this->entrada = $entrada;
  }

  
}
//objeto principal
$principal = new Principal();
//var_dump($principal->usuario);

//se usa para verificar si existe un metodo en alguna clase
$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);


//otro objeto
// $usuario = new UsuarioAdmin();
// var_dump($usuario);


// como comprobar que una clase existe

$clase = class_exists('PanelAdministrador\Usuario');

if ($clase) {

  echo "<h1>La clase SI EXISTE</h1>";
} else {

  echo "<h1>La clase no existe</h1>";
}
