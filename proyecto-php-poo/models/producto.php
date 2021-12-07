<?php


class Producto
{

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct()
    {

        $this->db = Database::connect(); //CONEXION A LA BASE DE DATOS
    }

    function getId()
    {

        return $this->id;
    }

    function getCategoria_id()
    {

        return $this->categoria_id;
    }

    function getNombre()
    {

        return $this->nombre;
    }

    function getDescripcion()
    {

        return $this->descripcion;
    }

    function getPrecio()
    {

        return $this->precio;
    }

    function getStock()
    {

        return $this->stock;
    }

    function getOferta()
    {

        return $this->oferta;
    }

    function getFecha()
    {

        return $this->fecha;
    }


    function getImagen()
    {

        return $this->imagen;
    }

    function setId($id)
    {

        $this->id = $id;
    }


    function setCategoria_id($categoria_id)
    {

        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre)
    {

        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion)
    {

        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio)
    {

        $this->precio = $this->db->real_escape_string($precio);
    }

    function setStock($stock)
    {

        $this->stock = $this->db->real_escape_string($stock);
    }

    function setOferta($oferta)
    {

        $this->oferta = $this->db->real_escape_string($oferta);
    }

    function setFecha($fecha)
    {

        $this->fecha = $fecha;
    }

    function setImagen($imagen)
    {

        $this->imagen = $imagen;
    }

    public function getAll()
    {  //PARA LLAMAR A TODOS LOS PRODUCTOS DE LA BASE DE DATOS

        $productos = $this->db->query("SELECT * FROM producto ORDER BY id DESC;");
        return $productos;
    }

    public function getAllCategory()
    {  //PARA LLAMAR A TODOS LOS PRODUCTOS DE UNA CATEGORIA

        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM producto p "
        . "INNER JOIN categoria c ON c.id = p.categoria_id "
        . "WHERE p.categoria_id = {$this->getCategoria_id()} "
        . "ORDER BY id DESC;";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getRandom($limit){ //es la funcion para que pueda aparecer los productos de forma aleatoria en el index

        $productos = $this->db->query("SELECT * FROM producto ORDER BY RAND() LIMIT $limit;");

        return $productos; 
    }

    public function getOne()
    {  //PARA LLAMAR A UNO SOLO

        $productos = $this->db->query("SELECT * FROM producto WHERE id = {$this->getId()};");
        return $productos->fetch_object(); //con el fetch object para que ya sea un objeto utilizable
    }


    public function save()
    { //PARA INSERTAR EN LA BASE DE DATOS LO QUE INGRESEMOS EN CREAR PRODUCTOS

        $sql = "INSERT INTO producto VALUES(NULL, {$this->getCategoria_id()},'{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;

        if ($save) {

            $result = true;
        }

        return $result;
    }

    public function edit()
    { //PARA INSERTAR EN LA BASE DE DATOS LO QUE INGRESEMOS EN CREAR PRODUCTOS

        $sql = "UPDATE producto SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()} ";
        
        if($this->getImagen() != null){ //comprobando que llega la imagen para poder editar
			$sql .= ", imagen='{$this->getImagen()}'";
        }
        $sql .= " WHERE id={$this->id};";
        
        

        $save = $this->db->query($sql);

        $result = false;

        if ($save) {

            $result = true;
        }

        return $result;
    }


    public function delete()
    {

    $sql = "DELETE FROM producto WHERE id={$this->id};";

    $delete = $this->db->query($sql);

/*         echo $this->db->error;
        die();   ESTO ES PARA VER QUE ERROR ARROJA LA BASE DE DATOS */


    $result = false;

    if ($delete) {

        $result = true;
    }

    return $result;

    }


    
    
}
