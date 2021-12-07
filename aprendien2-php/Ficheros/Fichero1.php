<?php
//abrir archivo
$archivo = fopen("Fichero_texto.txt", "a+");


//leer archivo
while(!feof($archivo)){

$contenido = fgets($archivo);
echo $contenido."<br/>";    

}

//escribir en un archivo
fwrite($archivo, "Soy un texto elmio");



//cerrar archivo
fclose($archivo);

//para copiar un fichero

// copy('Fichero_text.txt', 'fichero_copiado.txt) or die ("Error al copiar");

//para renombrar

//rename ('Fichero_text.txt', 'Fichero_facherito.txt);

// para eliminar

// unlink('Fichero_facherito.txt') or die ("Error al eliminar");

//para verifivar que un archivo existe o no


if(file_exists("ss.txt")){
echo "El archivo existe!!";

}else{
    echo "El archivo no existe!!";


}


?>