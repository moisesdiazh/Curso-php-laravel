<!DOCTYPE html>


<html lang="es">

<head>
    <meta charset="utf-8">
    <title>-Vintage</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>

    <div id="container" <!-- cabecera -->

        <header id="header">

            <div id="logo">
                <img src="assets/img/M.PNG" alt="Camisas logo" />
                <!--cargando en logo -->
                <a href="index.php" />
                Vntge
                </a>
            </div>

        </header>

        <!-- menu -->

        <nav id="menu">

            <ul>
                <li>
                    <a href="#"> Inicio </a>
                </li>
                <li>
                    <a href="#"> Uno </a>
                </li>
                <li>
                    <a href="#"> Dos </a>
                </li>
                <li>
                    <a href="#"> Tres </a>
                </li>
                <li>
                    <a href="#"> Cuatro </a>
                </li>
                <li>
                    <a href="#"> Cinco </a>
                </li>
            </ul>

        </nav>

        <div id="content">
            <!-- barra lateral -->
            <aside id="lateral">

                <div id="login" class="block_aside">

                    <h3>Entrar a la web</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="Enviar">

                    </form>
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>

                </div>


            </aside>


            <!-- contenido central -->

            <div id="central">
                <h1>Productos populares</h1>
                <div class="product">

                    <img src="assets/img/nike2.jpg" />

                    <h2> Nike Vintage </h2>
                    <p> 20.990 CLP</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">

                    <img src="assets/img/nike2.jpg" />

                    <h2> Nike Vintage </h2>
                    <p> 20.990 CLP</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">

                    <img src="assets/img/nike2.jpg" />

                    <h2> Nike Vintage </h2>
                    <p> 20.990 CLP</p>
                    <a href="#" class="button">Comprar</a>
                </div>


            </div>

            </div>

<!-- PIE DE PÁGINA -->
<footer id="footer">
    <p>Desarrollado por Víctor Robles WEB &copy; <?= date('Y') ?></p>
</footer>
</div>
</body>
</html>