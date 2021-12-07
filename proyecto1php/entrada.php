  <!---se carga todo antes para que pueda cargar $db y puedan cargar los id--->

  <?php require_once 'includes/conexion.php'; ?>
  <?php require_once 'includes/ayudante.php'; ?>

  <!---bucle para conseguir categoria en especifico--->
  <?php
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    if (!isset($entrada_actual['id'])) {

        header("Location: index.php");
    }
    ?>


  <?php require_once 'includes/cabecera.php'; ?>


  <div id="container">

      <?php require_once 'includes/lateral.php'; ?>

      <div id="principal">
          <!---contenido principal--->


          <!---que aparezca el titulo con la categoria especifica--->

          <h1><?= $entrada_actual['titulo'] ?></h1>
          <a href="categoria.php?id<?= $entrada_actual['categoria_id']; ?>">
              <h2><?= $entrada_actual['categoria'] ?></h2>
          </a>
          <h4><?= $entrada_actual['fecha'] ?> | <?= $entrada_actual['usuario'] ?></h4>
          <p>

              <?= $entrada_actual['descripcion'] ?>
          </p>
          <br />
                <!--corregir porsiacaso--->

          <?php if (isset($_SESSION['usuarios']) && $_SESSION['usuarios']['id'] == $entrada_actual['usuario_id']) : ?>
              <a href="editar-noticia.php?id=<?=$entrada_actual['id']?>" class="editarnoti">Editar noticia </a>
              <a href="eliminar-noticia.php?id=<?=$entrada_actual['id']?>" class="eliminarnoti">Eliminar noticia </a>
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