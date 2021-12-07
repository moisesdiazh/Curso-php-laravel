<?php
require_once 'models/producto.php';
class carritoController
{


    public function index()
    {
        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) {
            $carrito = $_SESSION['carrito'];
        } else {

            $carrito = array();
        }
        require_once 'views/carrito/index.php';
    }

    public function add()
    {

        if (isset($_GET['id'])) {

            $producto_id = $_GET['id'];
        } else {

            header('Location:' . base_url);
        }

        if (isset($_SESSION['carrito'])) {

            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $producto_id) {

                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }
        }

        if (!isset($counter) || $counter == 0) {
            //conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            //añadir al carrito
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(

                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }

        header("Location:" . base_url . "carrito/index");
        ob_end_flush();
    }

    public function delete() //para eliminar un producto del carrito
    {

        if (isset($_GET['index'])) {

            $index = $_GET['index'];
            unset($_SESSION['carrito'][$index]);
        }
        header("Location:" . base_url . "carrito/index");
    }


    //se usa el mismo controlador de delete
    public function up() //es el controlador para subir la unidad en el carrito con el boton
    {

        if (isset($_GET['index'])) {

            $index = $_GET['index']; //se trae el parametro por get el cual es el id
            $_SESSION['carrito'][$index]['unidades']++; //se realiza la operacion
        }
        header("Location:" . base_url . "carrito/index");
    }


    //se usa el mismo controlador de delete
    public function down() //es el controlador para bajar la unidad en el carrito con el boton
    {

        if (isset($_GET['index'])) {

            $index = $_GET['index']; //se trae el parametro por get el cual es el id
            $_SESSION['carrito'][$index]['unidades']--; //se realiza la operacion

            if ($_SESSION['carrito'][$index]['unidades'] == 0) { //se realiza la condicion por si es 0

                unset($_SESSION['carrito'][$index]);
            }
        }
        header("Location:" . base_url . "carrito/index");
    }

    public function delete_all()
    {

        unset($_SESSION['carrito']);
        header("Location:" . base_url . "carrito/index");
    }
}
