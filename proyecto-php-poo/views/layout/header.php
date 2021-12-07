<!DOCTYPE html>


<html lang="es">

<head>
    <meta charset="utf-8">
    <title>-Vintage</title>
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
</head>

<body>

    <div id="container">
        <!-- cabecera -->

        <header id="header">

            <div id="logo">
                <img src="<?= base_url ?>assets/img/M.PNG" alt="Camisas logo" />
                <!--cargando en logo -->
                <a href="<?=base_url?>" />
                Vntge
                </a>
            </div>

        </header>

        <!-- menu -->
            <?php $categorias = Utils::showCategorias(); ?> <!-- helpers para poder recorrer la lista -->

            <nav id="menu">
            <ul>
                <li>
                    <a href="<?=base_url?>"> Inicio </a>
                </li>

                <?php while($cat = $categorias->fetch_object()): ?> <!-- bucle para que recorra la lista de categorias -->

                    <li>
                        <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre ?></a> <!-- donde apararece el nombre de la categoria -->
                    </li>

                <?php endwhile; ?>

            </ul>

        </nav>

        <div id="content">