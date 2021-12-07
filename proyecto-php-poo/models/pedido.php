<?php

class Pedido //se copia del modelo de producto
{

    private $id;
    private $usuario_id;
    private $region;
    private $comuna;
    private $direccion;
    private $costo;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct()
    {

        $this->db = Database::connect(); //CONEXION A LA BASE DE DATOS
    }

    function getId()
    {

        return $this->id;
    }

    function getUsuario_id()
    {

        return $this->usuario_id;
    }

    function getRegion()
    {

        return $this->region;
    }

    function getComuna()
    {

        return $this->comuna;
    }

    function getDireccion()
    {

        return $this->direccion;
    }

    function getCosto()
    {

        return $this->costo;
    }

    function getEstado()
    {

        return $this->estado;
    }

    function getFecha()
    {

        return $this->fecha;
    }


    function getHora()
    {

        return $this->hora;
    }

    function setId($id)
    {

        $this->id = $id;
    }


    function setUsuario_id($usuario_id)
    {

        $this->usuario_id = $usuario_id;
    }

    function setRegion($region)
    {

        $this->region = $this->db->real_escape_string($region);
    }

    function setComuna($comuna)
    {

        $this->comuna = $this->db->real_escape_string($comuna);
    }

    function setDireccion($direccion)
    {

        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setCosto($costo)
    {

        $this->costo = $costo;
    }

    function setEstado($estado)
    {

        $this->estado = $estado;
    }

    function setFecha($fecha)
    {

        $this->fecha = $fecha;
    }

    function setHora($hora)
    {

        $this->hora = $hora;
    }

    public function getAll()
    {  //PARA LLAMAR A TODOS LOS PRODUCTOS DE LA BASE DE DATOS

        $pedido = $this->db->query("SELECT * FROM pedido ORDER BY id DESC;");
        return $pedido;
    }

	public function getOne(){
        //PARA LLAMAR UNO SOLO PEDIDO
		$producto = $this->db->query("SELECT * FROM pedido WHERE id = {$this->getId()}");
        return $producto->fetch_object();
    }
        
    public function getOneByUser()
    {   //PARA LLAMAR EL ULTIMO PEDIDO QUE REALIZO EL USUARIO
        $sql = "SELECT p.id, p.costo FROM pedido p "
            . "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC LIMIT 1";
        $pedido = $this->db->query($sql);

        
        return $pedido->fetch_object(); //con el fetch object para que ya sea un objeto utilizable


    }

    public function getAllByUser()
    {   //PARA LLAMAR EL ULTIMO PEDIDO QUE REALIZO EL USUARIO
		$sql = "SELECT p.* FROM pedido p "
				. "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC";
			
		$pedido = $this->db->query($sql);
		
		return $pedido;
    }




    public function getProductsByPedido($id) 
    {
        //PARA LLAMAR a los productos que se quieren comprar
/*       $sql = "SELECT * FROM producto WHERE id IN "
            . "(SELECT producto_id FROM linea_pedido WHERE pedido_id={$id});"; */ //era una consulta alternativa

        $sql = "SELECT pr.*, lp.unidades FROM producto pr "
             . "INNER JOIN linea_pedido lp ON pr.id = lp.producto_id "
             . "WHERE lp.pedido_id = {$id};";

           


        $productos = $this->db->query($sql);


        return $productos;
    }


    public function save()
    { //PARA INSERTAR EN LA BASE DE DATOS LO QUE INGRESEMOS EN CREAR PRODUCTOS

        $sql = "INSERT INTO pedido VALUES(NULL, {$this->getUsuario_id()},'{$this->getRegion()}', '{$this->getComuna()}', '{$this->getDireccion()}', {$this->getCosto()}, 'confirm', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);

        $result = false;

        if ($save) {

            $result = true;
        }

        return $result;
    }

    public function save_linea()
    { //para relacionar el id con el pedido

        $sql = "SELECT LAST_INSERT_ID() as 'pedido';"; //para sacar el ultimo insert realizado

        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        foreach ($_SESSION['carrito'] as $elemento) { //se saca del foreach de index de carrito

            $producto = $elemento['producto'];

            $insert = "INSERT INTO linea_pedido VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            $save = $this->db->query($insert);

            //para ver si ocurrio algun error en la consulta se hace un echo $this->db->error;
            /*    var_dump($producto);
            var_dump($insert);
           echo $this->db->error;
           die(); */
        }

        $result = false; //verificando que la ultima consulta es correcta

        if ($save) {

            $result = true;
        }

        return $result;
    }

    public function updateOne(){ //el modelo para poder actualizar el estado de un pedido en concreto

        //se agarra el modelo edit de producto.php
       
        $sql = "UPDATE pedido SET estado='{$this->getEstado()}' ";
        $sql .= " WHERE id={$this->getId()};";
        
        

        $save = $this->db->query($sql);

        $result = false;

        if ($save) {

            $result = true;
        }

        return $result;
    }
}
