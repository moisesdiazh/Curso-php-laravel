<?php
//varios parametros y argumentos

function calculadora($numero1,$numero2){

$suma = $numero1+$numero2;    
$resta = $numero1-$numero2;    
$mult = $numero1*$numero2;    
$div = $numero1/$numero2;    

echo "Suma: $suma<br/>";
echo "Resta: $resta<br/>";
echo "Multiplicacion: $mult<br/>";
echo "Division: $div<br/>";
echo "<hr>";

}

calculadora(3,2);
calculadora(3,4);

echo "<hr>";
//uso del return 


function DevuelveNombre($nombre,$apellidos){
$texto = "El nombre es: $nombre"
."<br/>".
"Los apellidos son: $apellidos";
return $texto;
}

echo DevuelveNombre("Victor", "Diaz");


?>