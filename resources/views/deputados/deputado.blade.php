@extends('layout')

@section('content')
    @include('components.header')

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 150px;">
            <div class="col-auto">
                <img src="{{ $deputado['url_foto'] }}" alt="Foto do Deputado {{ $deputado['nome'] }}">
            </div>
            <div class="col-auto">
                <h1>Deputado: {{ $deputado['nome'] }}</h1>
                <h2>Partido: {{ $deputado['sigla_partido'] }}</h2>
            </div>
        </div>
    </div>
@stop