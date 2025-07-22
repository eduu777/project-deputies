@extends('layout')

@section('content')
    @include('components.header')
    <div class="container">
        <div>
            <h1 class="row align-items-center text-center mt-4">{{ $deputado['nome'] }}</h1>
            <p>{{ $deputado['situacao'] }}</p>
        </div>
        <div class="row align-items-center mt-4 bg-gray-200">
            <div class="col-auto mt-4 mb-4 ms-3 text-start">
                <img src="{{ $deputado['url_foto'] }}" alt="Foto do Deputado {{ $deputado['nome'] }}" style="width: 300px; height: auto;">
            </div>
            <div class="col-auto text-start">
                <p><strong>Nome Civil:</strong> {{ $deputado['nome_civil'] }}</p>
                <p><strong>Partido:</strong> {{ $deputado['sigla_partido'] }} - {{ $deputado['sigla_uf'] }}</p>
                <p><strong>Email:</strong> {{ $deputado['email'] }}</p>
                <p><strong>Sexo:</strong> {{ $deputado['sexo'] }}</p>
                <p><strong>Data de nascimento:</strong> {{ $deputado['data_nascimento'] }}</p>
                <p><strong>Naturalidade:</strong> {{ $deputado['municipio_nascimento'] }} - {{ $deputado['sigla_uf'] }}</p>
            </div>
        </div>
        <div class="row mt-4 text-center border">
            <h1 class="mt-4">Despesas</h1>
            <h3 class="mb-4">Valor total em despesas ({{ date('Y') }}): {{ $valorDespesas }}</h3>
        </div>
        <div class="row mt-4 text-center border">
            <h1 class="mt-4">Profissões</h1>
            <ul class="list-group mt-4">
                @foreach ($profissoes as $p)
                    <li class="list-group-item">{{ $p['titulo'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @include('components.footer')
@stop