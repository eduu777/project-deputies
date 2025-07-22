@extends('layout')

@section('content')
    @include('components.header')
{{ $deputado }}
    <div class="container">
        <div>
            <h1 class="row justify-content-center align-items-center text-center mt-4">Deputado: {{ $deputado['nome'] }}</h1>
        </div>
        <div class="row justify-content-center align-items-center text-center mt-4 bg-gray-200">
            <div class="col-auto mt-4 mb-4">
                <img src="{{ $deputado['url_foto'] }}" alt="Foto do Deputado {{ $deputado['nome'] }}">
            </div>
            <div class="col-auto">
                <p><strong>Nome Civil:</strong></p>
                {{ $deputado['nome_civil'] }}
            </div>
        </div>
    </div>
@stop