<h1>Listado de frutas</h1>

<h3><a href="{{ action('FrutaController@create') }}"> Crear fruta </a></h3>

@if(session('status')) <!-- PARA QUE APAREZCA EL MENSAJE DE LA SESION CUANDO SE ELIMINO O SE CREO -->

<p style="background: green; color:white;">

    {{session('status')}}
</p>

@endif

<ul>

    @foreach($frutas as $fruta)

    <li>

        <a href="{{ action('FrutaController@detail', ['id'=> $fruta->id]) }}">

            {{$fruta->nombre}}

        </a>

    </li>

    @endforeach

</ul>