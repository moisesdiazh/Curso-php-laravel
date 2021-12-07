<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <?php
          
        $variableget = "";
        if(isset($_GET["mostrartabla"])) {
        $variableget = $_GET["mostrartabla"];
        }
    ?>
    
    <form action="index.php" method="GET" id="frm">

        <h1>Dias de las semanas</h1>
        <select name="mostrartabla" id="mostrartabla">

            <option value="si">Si</option>
            <option value="no">No</option>
        </select><br><hr>
        <input type="submit" value="Cambiar opción">
    </form>

    <br>
        

    <?php

        if($variableget == "si"){

            $diassemana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

            foreach($diassemana as $dias){

                echo '<table class="table table-hover">'.'<tr>'.'<td>'.$dias.'</td>'.'</tr>'.'</table>';
            }
         }else if($variableget == "no"){

            echo '<div class="alert alert-primary">'.'<h2>Tabla no generada</h2>'.'</div>';
         }
            
    ?>
    



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>    