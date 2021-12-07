<?php require_once 'includes/cabecera.php'; ?>


<div id="container">

    <?php require_once 'includes/lateral.php'; ?>

    <div id="principal">
        <!---contenido principal--->
        <h1>Ultimas entradas</h1>
<!--bucle para conseguir entradas-->
<?php 
$entradas = conseguirEntradas($db);
if(!empty($entradas)):
while($entrada = mysqli_fetch_array($entradas)):
?>


<article class="entrada">
            <a href="entrada.php?id=<?=$entrada['id']?>">
                <h2><?= $entrada['titulo']?></h2>
                <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                <p>
                    <?= substr($entrada['descripcion'], 0, 250).""?>
                </p>
            </a>
        </article>

<!--cerrando bucles-->
<?php
endwhile;
endif;
?>

        

        
        <div id="ver-todas">
            <a href="entradas.php">Ver todas las entradas</a>
        </div>

    </div>
    <!--final principal--->

    <div class="clearfix"></div>
</div>
<!---fin del container--->
<?php require_once 'includes/piedepagina.php'; ?>



</body>


</html>