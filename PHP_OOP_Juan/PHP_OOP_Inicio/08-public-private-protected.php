<?php include 'includes/header.php';

//public - se puede acceder en cualquier lugar, (objeto o clase)
//protected - se puede acceder unicamente con la clase, por ejemplo echo $bebida->getNombre();
//private - no se puede acceder por los hijos

class MenuRestaurant {
    public $nombre;
    public $precio; 

    public function __construct( $nombre, $precio ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebida extends MenuRestaurant {
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct( $nombre, $precio  );
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct( $nombre, $precio );
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}

