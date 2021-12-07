<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/ayudante.php'; ?>

<!DOCTYPE HTML>

<html lang="es">

<head>
  <meta charset="utf-8" />

  <title>Blog de deportes</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/estilo.css" />

</head>

<body>
  <!---cabecera--->
  <header id="cabecera">


    <!---logo--->
    <div id="logo">
      <a href="index.php">
        DreamFut
        <br>
        Noticias de futbol, futbol sala y mucho mas del deporte rey!
      </a>
    </div>

    <!---menu--->
    <nav id="menu">
      <ul>
        <li>
          <a href="index.php">Inicio</a>
        </li>
        <!--ARRAY PARA BUSCAR CATEGORIAS-->
        <?php
        $categorias = conseguirCategorias($db);
        if(!empty($categorias)):
        while ($categoria = mysqli_fetch_array($categorias)) :
        ?>





          <li>
            <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>


          </li>


        <?php
          endwhile;
        endif;
        ?>
        <li>
          <a href="index.php">Contacto</a>
        </li>
      </ul>

    </nav>

    <div class="clearfix"></div>
  </header>