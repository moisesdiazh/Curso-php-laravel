<?php


class Categoria
{

    private $id;
    private $nombre;
    private $db;


    public function __construct()
    {

        $this->db = Database::connect(); //CONEXION A LA BASE DE DATOS
    }

    function getId()
    {

        return $this->id;
    }

    function getNombre()
    {

        return $this->nombre;
    }

    function setId($id)
    {

        $this->id = $id;
    }

    function setNombre($nombre)
    {

        $this->nombre = $this->db->real_escape_string($nombre);
    }


    public function getAll(){ //para sacar todos

        $categorias = $this->db->query("SELECT * FROM categoria ORDER BY id DESC;");
        return $categorias;
    }

    public function getOne() //para sacar uno solo
    {  //PARA LLAMAR A TODOS LOS PRODUCTOS DE LA BASE DE DATOS

        $categorias = $this->db->query("SELECT * FROM categoria WHERE id = {$this->getId()};");
        return $categorias->fetch_object(); //con el fetch object para que ya sea un objeto utilizable
    }

public function save(){

    $sql = "INSERT INTO categoria VALUES(NULL, '{$this->getNombre()}');";
    $save = $this->db->query($sql);

    $result = false;

    if($save){

        $result = true;
    }

    return $result;
}

}
