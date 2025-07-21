<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deputadoController;


//Routes Deputies
Route::controller(deputadoController::class)->group(function(){
    Route::get('/', 'index')->name('deputados.index');
    Route::get('/{id}', 'listById')->name('deputados.listById');
});
