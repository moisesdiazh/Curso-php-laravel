        <!---se carga todo antes para que pueda cargar $db y puedan cargar los id--->

<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/ayudante.php'; ?>

                <!---bucle para conseguir categoria en especifico--->
<?php
$categoria_actual = conseguirCategoria($db, $_GET['id']);
if(!isset($categoria_actual['id'])){

header("Location: index.php");
}
?>


<?php require_once 'includes/cabecera.php'; ?>


<div id="container">

    <?php require_once 'includes/lateral.php'; ?>

    <div id="principal">
        <!---contenido principal--->


                <!---que aparezca el titulo con la categoria especifica--->

        <h1>Noticias sobre <?=$categoria_actual['nombre']?></h1>
<!--bucle para conseguir entradas-->
<?php 
$entradas = conseguirEntradas($db, null, $_GET['id']);
if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
while($entrada = mysqli_fetch_array($entradas)):
?>


<article class="entrada">
            <a href="entrada.php?id=<?=$entrada['id']?>">
                <h2><?= $entrada['titulo']?></h2>
                <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                <p>
                    <?= substr($entrada['descripcion'], 0, 250)."..."?>
                </p>
            </a>
        </article>

<!--cerrando bucles-->
<?php
endwhile;
else:
?>
<div class="alerta"> No hay noticias en esta categoria </div>


      <?php endif; ?>  

    
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
