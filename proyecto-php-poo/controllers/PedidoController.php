<?php

require_once 'models/pedido.php';

class pedidoController
{


    public function hacer()
    {

        require_once 'views/pedido/hacer.php';
    }

    public function add()
    {

        if (isset($_SESSION['identity'])) { //para verificar que esta identificado
            $usuario_id = $_SESSION['identity']->id;
            $region = isset($_POST['region']) ? $_POST['region'] : false;
            $comuna = isset($_POST['comuna']) ? $_POST['comuna'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

            //el coste lo sacamos del stats
            $stats = Utils::statsCarrito();
            $costo = $stats['total'];

            if ($region && $comuna && $direccion) {
                //se guardan datos en la bd
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setRegion($region);
                $pedido->setComuna($comuna);
                $pedido->setDireccion($direccion);
                $pedido->setCosto($costo);

                //para guardar el pedido
                $save = $pedido->save();

                //para guardar linea del pedido
                $save_linea = $pedido->save_linea(); //linea de pedido es para ver la relacion de los pedidos con el producto y el usuario

                if ($save && $save_linea) {

                    $_SESSION['pedido'] = "complete";
                } else {

                    $_SESSION['pedido'] = "failed";
                }
            } else {

                $_SESSION['pedido'] = "failed";
            }

            header("Location:" . base_url . 'pedido/confirmado');
        } else {

            //se redirige al index
            header("Location:" . base_url);
        }
    }

    public function confirmado()
    {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);

            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($pedido->id);
        }

        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos()
    {

        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();

        //sacar los pedidos del usuario
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();
        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle()
    {

        Utils::isIdentity();

        if (isset($_GET['id'])) {

            $id = $_GET['id']; //recogemos lo que es el id del pedido

            //llamamos al modelo, sacamos el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();

            //sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($id);


            require_once 'views/pedido/detalle.php';
        } else {

            header('Location:' . base_url . 'pedido/mis_pedidos');
        }
    }

    public function gestion()
    {
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedidos = $pedido->getAll();
        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado(){

        Utils::isAdmin();
        if(isset($_POST['pedido_id']) && isset($_POST['estado'])){

             //recojo los datos de formualario
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            //update del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->updateOne();

            header("Location:".base_url.'pedido/detalle&id='.$id);;

        }else{

            header("Location:".base_url);
        }
    }
}
