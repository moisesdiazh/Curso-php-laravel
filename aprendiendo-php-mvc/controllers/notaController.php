<?php

class notaController
{

    public function listar()
    {
        //modelo
        require_once 'models/nota.php';

        //logica de la accion del controlador
        $nota = new Nota();

       $notas =  $nota->conseguirTodos('notas');

        //vista
        require_once 'views/nota/listar.php';
    }

    public function crear() // funcion para crear
    {
        //modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");

        $guardar = $nota->guardar();

        
        header('Location: index.php?controller=Nota&action=listar');

    }

    public function borrar()
    {

        require_once 'models/nota.php';
    }
}
