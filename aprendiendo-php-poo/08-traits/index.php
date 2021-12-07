<?php

trait Utilidades{

 public function mostrarNombre(){

    echo "<h1>El nombre es ".$this->nombre."</h1>";
 }   
}


class Coche
{

    public $nombre;
    public $marca;
    use Utilidades;
}

class Persona
{

    public $nombre;
    public $apellidos;
    use Utilidades;

}

class VideoJuego{

public $nombre;
public $ano;
use Utilidades;

}
 

$coche = new Coche();
$coche->nombre = "Suzuki Swift";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Pepito Perez";
$persona->mostrarNombre();

$videojuego = new Videojuego();
$videojuego->nombre = "Carlos Duty";
$videojuego->mostrarNombre();
