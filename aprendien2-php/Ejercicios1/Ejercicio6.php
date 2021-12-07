<?php

echo "<table border= '1'> <tr>"; // inicio de la tabla
echo "<tr>"; // inicio fila 1

for($cabezera = 1; $cabezera <= 10; $cabezera++){
echo "<td>Tabla de $cabezera</td>";

}
echo "</tr>"; // cierre fila 1

echo "<tr>"; // inicio fila 2

for($i = 1; $i <= 10; $i++){
echo "<td>";
for($x = 1; $x <= 10; $x++){
echo "$i x $x = ".($i*$x)."<br>";

}

echo "</td>";
}
echo "</tr>"; // cierre fila 2





echo "</table>"; // fin de la tabla


?>