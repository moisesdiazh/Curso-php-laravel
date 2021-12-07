<?php

$tabla = array(
  "ACCION" => array("COD", "MISSION IMPOSIBLE", "PUGB"),
  "AVENTURA" => array("ZELDA", "GOD OF WAR", "WOW"),
  "DEPORTES" => array("FIFA 20", "PES 20", "MLB 20")    
);

$categorias = array_keys($tabla);

?>
<table border="1">

<!--encabezado de la tabla-->
<?php include 'IncludesArrays/encabezado.php'; ?>

<!--contenido1-->

<?php include 'IncludesArrays/contenido1.php'; ?>

<!--contenido2-->

<?php include 'IncludesArrays/contenido2.php'; ?>


<!--contenido3-->


<?php include 'IncludesArrays/contenido3.php'; ?>



</table>