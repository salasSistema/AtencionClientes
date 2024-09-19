<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarrioController;

Route::get('/', function () {
    return view('welcome');
});
//Esta ruta nos permite acceder al controlador BarrioController, a la funcion index
Route::get('/barrios', [BarrioController::class, 'index']);