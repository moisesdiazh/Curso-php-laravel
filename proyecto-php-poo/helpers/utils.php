<?php

class Utils
{

    public static function deleteSession($name)
    {

        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }

    public static function isAdmin()
    {

        if (!isset($_SESSION['admin'])) {

            header("Location:" . base_url);
        } else {

            return true;
        }
    }

    public static function isIdentity() //para saber si el usuario esta logueado en un usuario normal
    {

        if (!isset($_SESSION['identity'])) {

            header("Location:" . base_url);
        } else {

            return true;
        }
    }

    public static function showCategorias()
    {
        require_once 'models/categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    public static function statsCarrito()
    {
        $stats = array( //array con lo que tendremos
            'count' => 0,
            'total' => 0
        );

        if (isset($_SESSION['carrito'])) //por cada sesion de carrito que exista
        {
            //para saber el total de productos
            $stats['count'] = count($_SESSION['carrito']);
            foreach ($_SESSION['carrito'] as $producto) {

                //para saber la suma total de los precios de los productos a comprar
                $stats['total'] += $producto['precio'] * $producto['unidades'];
            }
        }

        return $stats;
    }

    public static function showStatus($status)
    { //este helper es para ver los estados dependiendo de la condicion

        $value = 'Pendiente';

        if ($status == 'confirm') {

            $value = 'Pendiente';
        } elseif ($status == 'preparation') {

            $value = 'En preparación';
        } elseif ($status == 'ready') {

            $value = 'Preparado';
        }
        if ($status == 'sended') {

            $value = 'Enviado';
        }

        return $value;
    }
}
