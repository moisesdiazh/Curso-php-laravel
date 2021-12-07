<?php

// programacion orientada a objetos en php 

//definir una clase (molde para crear objetos tipo coche con caracteristicas parecidas)

class Coche{
    // adentro van atributos o propiedades (variables)


    //public: podemos acceder desde cualquier lugar, dentro de la clase actual
    //dentro de las clases que hereden esta clase o fuera de la clase
public $color;

//protected: podemos acceder desde la clase que los define y desde clases que hereden dicha clase
protected $marca;

//private: unicamente pueden acceder desde esta clase 
private $modelo;




public $velocidad; 
public $caballaje;
public $plazas; 


public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
{
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    $this->caballaje = $caballaje;
    $this->plazas = $plazas;

}

//metodos son acciones que hace el objeto(antes serian funciones)
public function getColor(){

// this significa busca en esta clase la propiedad xxx

return $this->color;
}

public function setColor($color){
 // si quiero cambiar el color
$this->color = $color; 
}

public function acelerar(){
//para modificar la velocidad
$this->velocidad++;


}

public function frenar(){
//para modificar la velocidad

$this->velocidad--;

}

public function getModelo(){
//para que se vea la velocidad actual mediante el parametro get
return $this->modelo;

}

public function setMarca($marca){

$this->marca = $marca;

}

public function mostrarInformacion(Coche $miObjeto){

if(is_object($miObjeto)){    
$informacion = "<h1>Informacion del coche </h1>";
$informacion .= "Color: ".$miObjeto->color;
$informacion .= "<br/> Modelo: ".$miObjeto->modelo;
$informacion .= "<br/> Velocidad: ".$miObjeto->velocidad;
}
else{

 $informacion = "Tu dato es: $miObjeto";   
}
return $informacion;
}

}