<!DOCTYPE HTML>

<html lang = "es">
<head>
<meta charset = "utf-8" />
<title>Subir archivos en PHP</title>
</head>
<body>

<h1>Subir archivos en php<h1>   <!--INTERFAZ-->

<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="archivo" />
<input type="submit" value="Enviar" />

<h1>Listado de imagenes</h1>
<?php
$gestor = opendir('./images'); // variable para abrir el directorio de imagenes

if($gestor): //ciclo para que abra las imagenes ingresadas en el directorio

while(($image = readdir($gestor)) !== false): //reddir lee el gestor
if($image != '.' && $image != '..'):
    echo "<img src='images/$image' width='200px' /><br/>";

endif;    

endwhile;


endif;




?>



</form>

</body>
</html>