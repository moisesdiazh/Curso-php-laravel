<!DOCTYPE html>

<head>
    <html lang="es">

    <meta charset="utf-8" />

    <title>Titulo - @yield('titulo')</title>
</head>

<body>

    @section('header')
    <!-- AQUI MOSTRAREMOS LO QUE QUIEREN QUE VEAN EN LA CABECERA -->
    <h1>CABECERA DE LA WEB (master)</h1>
    @show
    <hr>

    <div class="container">

        @yield('content')

        <!-- yield se coloca cuando es una variable a sustituir -->


    </div>

    <hr>

    @section('footer')
    <!-- AQUI MOSTRAREMOS LO QUE QUIEREN QUE VEAN EN EL FOOTER -->
    PIE DE PAGINA DE LA WEB (master)
    @show

</body>

</html>