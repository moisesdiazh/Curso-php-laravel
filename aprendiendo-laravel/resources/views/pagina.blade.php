@extends('layouts.master')
<!-- EL EXTENDS PARA HEREDAR-->

@section('titulo', 'Master en PHP') <!--con section igual puede modificar -->


<!-- para heredar y añadirle texto -->

@section('header')

@parent() <!-- se edita abajo de la cabecera pero sigue en la cabecera -->
    <h2>QLQ</h2>
@stop


@section('content')
<h1>Contenido de la pagina generica</h1>

@stop