<?php include 'includes/header.php';

    //get para obtener un valor
    //set para modificar o agregar un valor
    //si se realiza un protected, se debe realizar un set para poder modificarlo o agregar
    class MenuRestaurant {
        public $nombre;
        public $precio;
        protected $categoria;
    
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
        public function getCategoria()
        {
            return $this->categoria;
        }

        //los set son para agregar o modificar un valor mediante la clase
        public function setCategoria($categoria) 
        {

            $this->categoria = $categoria;
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


    $postre = new Postre('Tres leches', 100, '120g');
    $postre->setCategoria('Postre');
    var_dump($postre);