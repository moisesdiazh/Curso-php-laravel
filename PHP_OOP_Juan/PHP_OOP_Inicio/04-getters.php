<?php include 'includes/header.php';

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;



       
        public function getNombre()
        {
                return $this->nombre;
        }

   
        public function getPrecio()
        {
                return $this->precio;
        }
    }


    $bebida = new MenuRestaurant();
    $bebida->nombre = 'Jugo de piña';
    $bebida->precio = 30;
    echo $bebida->getNombre();
    echo $bebida->getPrecio();
    

    echo "<br>";

    $postre = new MenuRestaurant();
    $postre->nombre = 'Tres leches';
    $postre->precio = 100;
    echo $postre->getNombre();
    echo $postre->getPrecio();
    



