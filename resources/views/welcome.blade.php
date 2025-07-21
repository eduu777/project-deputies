@extends('layout')


@section('content')

@include('components.header')

    <div class="container">
       @include('components.cardsDeputados')
    </div>

@stop
