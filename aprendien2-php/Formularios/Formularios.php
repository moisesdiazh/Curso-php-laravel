<!DOCTYPE HTML>

<html lang = "es">
<head>

<meta charset = "utf-8" />
<title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <!--para realizar formularios--> 
   <form action="" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre: </label>
    <p><input type="text" name="nombre" /></p>

   <label for="apellido">Apellido: </label>
   <p><input type="text" name="apellido" /></p>

    <!--para botones--> 

   <label for="boton">Boton: </label>
   <p><input type="button" name="boton" value="click" /></p>

    <!--para campos de sexo--> 
   <label for="sexo">Sexo: </label>
   <p>
     Hombre <input type="checkbox" name="hombre" /> 
     Mujer <input type="checkbox" name="mujer" />
   </p>

    <!--para color--> 
   <label for="color">Color: </label>
   <p><input type="color" name="color" /></p>

    <!--para fechas--> 
   <label for="fecha">Fecha: </label>
   <p><input type="date" name="fecha" /></p>

 <!--para correos--> 
   <label for="email">Email: </label>
   <p><input type="email" name="email" /></p>

 <!--para boton de cargar archivos--> 
   <label for="archivo">Archivo: </label>
   <p><input type="file" name="archivo" multiple="multiple" /></p>


   <label for="numero">Numero: </label>
   <p><input type="number" name="numero" /></p>

 <!--para campo de contraseña--> 

   <label for="contraseña">Password: </label>
   <p><input type="password" name="contraseña" /></p>

 <!--para botones multiples--> 

   <label for="continente">Continentes: </label>
   <p>
   Sudamerica <input type="radio" name="continente" value="Sudamerica" />
   Europa <input type="radio" name="continente" value="Europa" />
   Asia <input type="radio" name="continente" value="Asia" />
   </p>

 <!--para ingresar web--> 

   <label for="web">Web: </label>
   <p><input type="url" name="web" /></p>

 <!--para crear un ingreso de textos mas grande-->
   <textarea></textarea><br/>


 <!--para crear boton con opciones-->
<select name="peliculas">
<option value="Los jefasos">Los jefasos</option>
<option value="Los maricos">Los maricos</option>
<option value="Los pericos">Los pericos</option>
</select>

<br/>

<input type="submit" value="Enviar" />



   </form>

</body>
</html>
