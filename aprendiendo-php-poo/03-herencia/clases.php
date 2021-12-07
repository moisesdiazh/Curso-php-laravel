<?php

// HERENCIA: ES LA CAPACIDAD DE COMPARTIR ATRIBUTOS Y METODOS ENTRE CLASES 


class Persona
{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function getNombre()
    {

        return $this->nombre;
    }

    public function getApellido()
    {

        return $this->apellido;
    }

    public function getAltura()
    {

        return $this->altura;
    }
    public function getEdad()
    {

        return $this->edad;
    }


    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }


    public function setApellido($apellido)
    {

        $this->apellido = $apellido;
    }

    public function setAltura($altura)
    {

        $this->altura = $altura;
    }

    public function setEdad($edad)
    {

        $this->edad = $edad;
    }

    public function hablar()
    {


        return "Estoy hablando";
    }

    public function caminar()
    {

        return "Estoy caminando";
    }
}


// extends es para heredar de una clase 
class Informatico extends Persona
{

    public $lenguajes;
    public $experienciaProgramador;

public function __construct()
{
    $this->lenguajes = "HTML, CSS Y JS";
    $this->experienciaProgramador = 10;
}


    public function sabeLenguajes($lenguajes)
    {

        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }


    public function programar()
    {

        return "Soy programador";
    }

    public function repararOrdenador()
    {

        return "Reparando ordenador";
    }

    public function haciendoOfimatica()
    {

        return "Estoy escribiendo en word";
    }
}


class TecnicoRedes extends Informatico{



public $testearRedes;

public $experienciaRedes;


//parent es para que pueda heredar el constructor del padre siendo el hijo
public function __construct()
{
    parent::__construct();
    $this->testearRedes = "Experto";
    $this->experienciaRedes = 5;
}


public function testeo(){

return "Estoy testeando la red";

}

}