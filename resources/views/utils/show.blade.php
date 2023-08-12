@extends('layout')
@section('content')
    Archivo: <img class="img-thumbnail" src="{{ asset($util->file) }}" alt="Sin Foto"><br>
    Nombre: <h2>{{ $util->name }}</h2>
    Descripción: <h3>{{ $util->description }}</h3>
    URL: <h4><a href="{{ $util->url }}" target="blank">{{ $util->url }}</a></h4>
@endsection
