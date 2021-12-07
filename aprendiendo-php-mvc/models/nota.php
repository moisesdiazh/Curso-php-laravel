<?php

require_once 'ModeloBase.php';

class nota extends ModeloBase
{

    public $usuario_id;
    public $titulo;
    public $descripcion;

    // de esta manera se tiene acceso a la propiedad de la base de datos para las consultas heredandolo del padre
    public function __construct()
    {
        parent::__construct();
    }

    function getUsuario_id()
    {

        return $this->usuario;
    }

    function getTitulo()
    {

        return $this->titulo;
    }

    function getDescripcion()
    {

        return $this->descripcion;
    }

    function setUsuario_id($usuario_id)
    {

        $this->usuario_id = $usuario_id;
    }

    function setTitulo($titulo)
    {

        $this->titulo = $titulo;
}

    function setDescripcion($descripcion)
    {

        $this->descripcion = $descripcion;
    }



    public function guardar()
    {
        //consulta mysql para realizar el insert en la base de datos
        $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";

        $guardado = $this->db->query($sql);
        return $guardado;

    }
}
