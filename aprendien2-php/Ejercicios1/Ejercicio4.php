<?php



if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];


echo "<h1>La suma es: ".($numero1+$numero2)."</h1><br>";
echo "<h1>La resta es: ".($numero1-$numero2)."</h1><br>";
echo "<h1>La resta2 es: ".($numero2-$numero1)."</h1><br>";
echo "<h1>La division es: ".($numero1/$numero2)."</h1><br>";
echo "<h1>La division2 es: ".($numero2/$numero1)."</h1><br>";
echo "<h1>La multiplicacion es: ".($numero1*$numero2)."</h1><br>";


}else{

echo "Introduce correctamente los valores por la url";

}

  

?>