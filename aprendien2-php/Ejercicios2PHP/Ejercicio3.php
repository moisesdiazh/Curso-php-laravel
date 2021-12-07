<?php
$resultado = false;


if(isset($_POST['Numero1']) && isset($_POST['Numero2'])){


if(isset($_POST['sumar'])){
 $resultado = "El resultado es: ".($_POST['Numero1'] + $_POST['Numero2']);

}if(isset($_POST['restar'])){
    $resultado = "El resultado es: ".($_POST['Numero1'] - $_POST['Numero2']);
}
if(isset($_POST['multiplicar'])){
    $resultado = "El resultado es: ".($_POST['Numero1'] * $_POST['Numero2']);

}if(isset($_POST['dividir'])){
    $resultado = "El resultado es: ".($_POST['Numero1'] / $_POST['Numero2']);  

}
}

?>

<!DOCTYPE HTML>

<html lang = "es">
<head>
<title>Formulario HTML</title>
<meta charset = "utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<h1>Calculadora EN PHP</h1>

    <form action="" method="POST">

       <label for="Numero1">Numero1</label><br/>
        <input type="number" name="Numero1" /><br/>

        <label for="Numero2">Numero2</label><br/>
        <input type="number" name="Numero2" /><br/>

        <br/>

        <input type="submit" value="Sumar" name="sumar"/>
        <input type="submit" value="Restar" name="restar"/>
        <input type="submit" value="Multiplicar" name="multiplicar"/>
        <input type="submit" value="Dividir" name="dividir"/>

    </form>

    <?php
    // resultado
    if($resultado){
   echo "<h2>$resultado</h2>";
    
    }

 ?>


</body>

</html>
