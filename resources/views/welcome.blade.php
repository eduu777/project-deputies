@extends('layout')


@section('content')

@include('components.header')

    <div class="container">
        <div class="mt-5 text-center">
            <h1 class="text-uppercase fw-bold">Quem são os deputados</h1>
            <p><a class="text-uppercase text-decoration-none" href="#">Partidos</a></p>
        </div>
        <!--<div class="d-flex flex-column align-items-center justify-content-center mt-5 mb-5 border">
            <div class="input-group mb-3 mt-4" style="max-width: 600px; width: 100%;">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
            <a href="#" class="btn btn-primary px-4 mb-3">Buscar</a>
        </div> -->
       @include('components.cardsDeputados')
    </div>

@stop
