<?php include 'includes/header.php';

class MenuRestaurant {   
     
    public $nombre = 'Nombre del producto';
    public $precio = 0;
}
    
$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de piña';
$bebida->precio = 30;

echo $bebida->nombre;

var_dump($bebida);

$postre = new MenuRestaurant();
$postre->nombre = 'Tres leches';
$postre->precio = 100;

var_dump($postre);