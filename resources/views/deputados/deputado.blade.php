@extends('layout')

@section('content')
    @include('components.header')
    <div class="container">
        <div>
            <h1 class="row align-items-center text-center mt-4">{{ $deputado['nome'] }}</h1>
            <p class="fs-5">{{ $deputado['situacao'] }}</p>
        </div>
        <div class="row align-items-center mt-4 bg-gray-200">
            <div class="col-auto mt-4 mb-4 ms-3 text-start">
                <img src="{{ $deputado['url_foto'] }}" alt="Foto do Deputado {{ $deputado['nome'] }}" style="width: 300px; height: auto;">
            </div>
            <div class="col-auto text-start">
                <p class="fs-5"><strong>Nome Civil:</strong> {{ $deputado['nome_civil'] }}</p>
                <p class="fs-5"><strong>Partido:</strong> {{ $deputado['sigla_partido'] }} - {{ $deputado['sigla_uf'] }}</p>
                <p class="fs-5"><strong>Email:</strong> {{ $deputado['email'] }}</p>
                <p class="fs-5"><strong>Sexo:</strong> {{ $deputado['sexo'] }}</p>
                <p class="fs-5"><strong>Data de nascimento:</strong> {{ $deputado['data_nascimento'] }}</p>
                <p class="fs-5"><strong>Naturalidade:</strong> {{ $deputado['municipio_nascimento'] }} - {{ $deputado['sigla_uf'] }}</p>
            </div>
        </div>
        <div class="row mt-4 text-center border">
            <h1 class="mt-4">Despesas</h1>
            <p class="mb-4 fs-3">Valor total em despesas ({{ date('Y') }}): {{ $valorDespesas }}</p>
        </div>
        <div class="row mt-4 text-center border">
            <h1 class="mt-4">Profissões</h1>
            <ul class="list-group mt-4">
                @foreach ($profissoes as $p)
                    <li class="list-group-item fs-5">{{ $p['titulo'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @include('components.footer')
@stop