<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeputadoController;
use App\Http\Controllers\PartidoController;


//Routes Deputies
Route::controller(DeputadoController::class)->group(function(){
    Route::get('/', 'index')->name('deputados.index');
    Route::get('/deputados/{id}', 'listById')->name('deputados.listById');
});

Route::controller(PartidoController::class)->group(function(){
    Route::get('/partidos', 'index')->name('partidos.index');
});
