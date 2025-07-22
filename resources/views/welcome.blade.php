@extends('layout')


@section('content')

    @include('components.header')

    <div class="container">
        <div class="mt-4 text-center">
            <h1 class="text-uppercase fw-bold">Quem são os deputados</h1>
            <p><a class="text-uppercase text-decoration-none" href="{{ route('partidos.index') }}">Partidos</a></p>
        </div>
       @include('components.cardsDeputados')
    </div>

     @include('components.footer')
@stop
