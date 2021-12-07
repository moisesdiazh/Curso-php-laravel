<h1>{{$titulo}}</h1>

@if(isset($pagina))
<h3>La pagina es {{$pagina}}</h3>
@endif

<a href="{{ action('PeliculaController@detalle') }}">Ir al detalle</a> <!-- Enlaces con laravel -->

<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a> <!-- Otra forma de hacer los enlaces con route -->