 <?php include 'includes/header.php';

//las clases son una plantilla, simplemente son para guiarnos de la estructura

interface RestauranteInterface{

    public function getNombre();

    public function getPrecio() : int;
}


class MenuRestaurant { 
    public $nombre; 
    protected $precio;

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