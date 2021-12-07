<?php


//el require para poder utilizar la funcion
require '../vendor/autoload.php';

//para usar el namespace del package para hacer pdf
use Spipu\Html2Pdf\Html2Pdf;

$html2Pdf = new Html2Pdf();

//recoger la vista a imprimir pdf

ob_start(); //se comienza a buscar la vista
require_once 'pdf_para_generar.php'; //se encuentra la vista y se imprime
$html = ob_get_clean(); //pasa en limpio el html

$html2Pdf->writeHTML($html); //funcion para que se vea lo escrito

$html2Pdf->output('pdf_generado.pdf'); //funcion para que lo pase a pdf y se vea