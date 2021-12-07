<?php
/* bucles while */

$numero = 0;

while ($numero <= 100){

echo $numero;


if($numero != 100){

echo ",  "; 
    
}
$numero++;


}

echo "<hr>";

if($_GET ['numero']){

$numero = $_GET['numero'];

}else{

$numero = 1;    
}


echo "<h1>tabla de multiplicar $numero</h1>";
$contador = 1;

while($contador <= 10){
echo "$numero x $contador = ".($numero*$contador)."<br/>";
$contador++;

echo "<hr>";

/* do while */

$edad = 18;
$contador = 1;
do{

echo "Tienes acceso al betica $contador<br/ >";
$contador++;

}while($edad >= 18 && $contador <= 10);




}


?>