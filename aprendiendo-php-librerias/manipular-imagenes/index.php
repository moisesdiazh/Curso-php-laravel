<?php

require '../vendor/autoload.php';

//se hace una variable de la foto original
$foto_original = 'pjanic1.jpg';


//se hace una variable para donde se guardara
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

$thumb->resize(300, 300); //para editar el tamaño

             //que empiece a recortar en el pixel 50, en Y en el pixel 50 y que los cortes sean de 120
//$thumb->crop(50, 50, 120, 120);

//recortar de ancho 200 y 100 de largo
$thumb->cropFromCenter(200,100);


$thumb->show(); //para mostrar la imagen

$thumb->save($guardar_en); //donde se guardara



