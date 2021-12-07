
<?php

$pais = "qlq";

if($pais == "venezuela" || $pais == "españa" || $pais == "colombia"){
echo "<h1>En este pais se habla español </h1>";

}else{
echo "<h1>No se habla español</h1>";

}

/*
 operadores logicos

&& and
|| or 
! not 

*/

echo "<hr>";

/* switch */
$dia = "8";

switch($dia){
case 1 : 
    echo "Es lunes";
break;
case 2 :
echo "Es martes";    
break;
case 3 :
echo "Es miercoles";
break;
case 4 : 
echo "Es jueves";
break;
case 5:
echo "Es viernes";
break;

default:
echo "Es fin de semana";
}
echo "<hr>";
/* ejemplo de goto (ejecuta saltos en el programa o salta ejecuciones) */
goto marca;
echo "<h1>Instruccion 1<h1>";
echo "<h1>Instruccion 2<h1>";
echo "<h1>Instruccion 3<h1>";
echo "<h1>Instruccion 4<h1>";

marca:
echo "Me he saltado 4 echos";



?>