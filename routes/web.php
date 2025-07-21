<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeputadoController;


//Routes Deputies
Route::controller(DeputadoController::class)->group(function(){
    Route::get('/', 'index')->name('deputados.index');
    Route::get('/{id}', 'listById')->name('deputados.listById');
});
