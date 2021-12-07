<?php

//CLASES DE LOS MODELOS
require_once 'ModeloBase.php';

//se hereda de modelo base las funciones que podemos usar como conseguirTodos()
class Usuario extends ModeloBase{

public $nombre;
public $apellido;
public $email;
public $password;

// de esta manera se tiene acceso a la propiedad de la base de datos para las consultas heredandolo del padre
    public function __construct()
    {
        parent::__construct();
    }


function getNombre(){

return $this->nombre;    
}

function getApellido(){

return $this->apellido;    
}

function getEmail(){

return $this->nombre;    
}

function getPassword(){

return $this->password;    
}

function setNombre($nombre){

$this->nombre = $nombre;    
}

function setApellido($apellido){

$this->apellido = $apellido;    
}

function setEmail($email){

$this->email = $email;    
}

function setPassword($password){

$this->password = $password;    
}


}
