<h1>{{$fruta->nombre}}</h1>


<p>

    {{$fruta->descripcion}}<br>
    <br>
    ${{$fruta->precio}}
</p>

<a href="{{ action('FrutaController@delete', ['id' => $fruta->id]) }}">Eliminar</a><br>

<a href="{{ action('FrutaController@edit', ['id' => $fruta->id]) }}">Actualizar</a><br>

<a href="{{ action('FrutaController@index') }}">Volver al inicio</a>