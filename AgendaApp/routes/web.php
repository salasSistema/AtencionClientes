<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarrioController;
use App\Http\Controllers\CallesController;
use App\Http\Controllers\Estado_generalController;
use App\Http\Controllers\Estado_ofertaController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\Observaciones_PropiedadesController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\Tipo_inmuebleController;
use App\Http\Controllers\ZonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    //Estas ruta nos permite acceder al controlador BarrioController, a la funcion index
    Route::get('/barrios', [BarrioController::class, 'index']);//name sirve para asignar nombres a las rutas y facilitar su uso en las vistas y en el manejo de redirecciones. 
    Route::get('/calles', [CallesController::class, 'index'])->name('calles.index');
    Route::get('/estado_general', [Estado_generalController::class, 'index'])->name('estado_general.index');
    Route::get('/estado_oferta', [Estado_ofertaController::class, 'index'])->name('estado_oferta.index');
    Route::get('/localidad', [LocalidadController::class, 'index'])->name('localidad.index');
    Route::get('/observaciones_propiedades', [Observaciones_PropiedadesController::class, 'index'])->name('observaciones_propiedades.index');
    Route::get('/provincias', [ProvinciaController::class, 'index'])->name('provincias.index');
    Route::get('/tipo_inmueble', [Tipo_inmuebleController::class, 'index'])->name('tipo_inmueble.index');
    Route::get('/zona', [ZonaController::class, 'index'])->name('zona.index');
});