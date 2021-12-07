<?php

interface Ordenador
{

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}

class iMac implements Ordenador
{

    public $modelo;

    function getModelo()
    {

        return $this->modelo;
    }

    function setModelo($modelo)
    {

        $this->modelo = $modelo;
    }

    // PARA QUE PUEDA ACCIONAR LA INTERFAZ SE TIENE QUE 
    //DEFINIR LOS FUNCTION DE LAS VARIABLES DEFINIDAS EN LA INTERFAZ

    public function encender()
    {;
    }

    public function apagar()
    {;
    }

    public function reiniciar()
    {;
    }

    public function desfragmentar()
    {;
    }

    public function detectarUSB()
    {;
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2019');
echo $maquintos->getModelo();
