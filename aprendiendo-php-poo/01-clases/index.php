<?php

// programacion orientada a objetos en php 

//definir una clase (molde para crear objetos tipo coche con caracteristicas parecidas)

class Coche{
    // adentro van atributos o propiedades (variables)

public $color = "rojo";
public $modelo = "chevrolet";
public $velocidad = "300";
public $marca = "akira"; 
public $caballaje = "500";
public $plazas = "2"; 




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

public function getVelocidad(){
//para que se vea la velocidad actual mediante el parametro get
return $this->velocidad;

}


} // fin de definicion de la clase


// crear un objeto o instanciar la clase

$coche = new Coche();   

// usar metodos

// echo $coche->getVelocidad(); 



$coche->setColor("Amarillo");

echo "El color del coche es: ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: ".$coche->getVelocidad().'<br>';



?>