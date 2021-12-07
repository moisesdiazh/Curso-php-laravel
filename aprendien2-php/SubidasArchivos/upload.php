<?php

$archivo = $_FILES['archivo']; //el archivo que se subira
$nombre = $archivo['name'];  //nombre del archivo
$tipo = $archivo['type'];  //tipo de archivo

//se clasifica el tipo de archivo que se subira para las restricciones

if($tipo === "image/jpg" || $tipo === "image/jpeg" || $tipo ==="image/png" || $tipo === "image/gif"){

 if(!is_dir('images')){ //para crear el directorio de imagenes o carpeta
 mkdir('images', 0777);

 }
 move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre); //la subida del archivo

 header("Refresh: 5; URL=Index.php"); //refrescar y redirigir a una pagina

 echo "<h1>Imagen ha sido subida correctamente</h1>";

}
else{
        //por si se suben mal el archivo
    header("Refresh: 5; URL=Index.php");
   
     echo "<h1>Suba la imagen en el formato correcto, por favor...</h1>";
}


?>