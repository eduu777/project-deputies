@extends('layout')


@section('content')

    @include('components.header')

    <div class="container">
        <div class="mt-4 text-center">
            <h1 class="text-uppercase fw-bold">Partidos</h1>
            <p><a class="text-uppercase text-decoration-none" href="{{ route('deputados.index') }}">Deputados</a></p>
        </div>
        @include('components.cardsPartidos')
    </div>

     @include('components.footer')
@stop
