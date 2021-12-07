<?php

require_once '../vendor/autoload.php';

//conexion a base de datos
$conexion = new mysqli("localhost", "root", "", "notas_master", 3308); 
        $conexion->query("SET NAMES 'utf8'");

//Consulta para contar elementos totales
       $consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");


        $numero_elementos = $consulta->fetch_object()->total;
        $numero_elementos_pagina = 2;

        //SE REALIZA LA PAGINACION 

        $pagination = new Zebra_Pagination();


        //NUMERO total de elementos a paginar

        $pagination->records($numero_elementos);

        //NUMERO DE elementos por pagina    
        $pagination->records_per_page($numero_elementos_pagina);

        //consigue la pagina de la url
        $page = $pagination->get_page();

        //se calcula 
        $empieza_aqui = (($page - 1)*$numero_elementos_pagina);
        $sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";
        $notas = $conexion->query($sql);


     echo   '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">'; 

while($nota = $notas->fetch_object()){

echo "<h1>{$nota->titulo}</h1>";
echo "<h3>{$nota->descripcion}</h3></hr>";


}     

//links de la paginacion


$pagination->render();
