<?php
// funciones 

/* Estructura: function NombreMiFucion($parametro){
 // BLOQUE DE INSTRUCCIONES O ORDENES
}

*/
// EJEMPLOS
function MuestraNombres(){

echo "<h1>Moise</h1><br/>";    
echo "<h2>Gabo</h2><br/>";  
echo "<h3>Jonas</h3><br/>";  
echo "<h4>Alfreo    </h4><br/>";  
}

MuestraNombres();

echo "<hr>";

// ejemplo 2
function tabla($numero){
echo "<h3>Tabla de multiplicar de $numero</h3>";

for($i = 1; $i <= 10; $i++){
$operacion = $numero*$i;
echo "$numero * $i = $operacion <br/>";
}
}

if(isset($_GET['numero'])){

    tabla($_GET['numero']);
    tabla(2);
    tabla(33);
    tabla(16);

}else{

echo "No hay numero para calcular la tabla";

}






?>