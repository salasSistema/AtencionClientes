<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Barrio as ModelsBarrio;
use Illuminate\Http\Request;
use App\Http\Controllers\Barrio;


class BarrioController extends Controller
{
    //Devolver todos los barrios en formato JSON
    public function index() {
        $barrio = new ModelsBarrio();
        // Obtén todos los barrios de la base de datos
        $barrios = $barrio::all();
        // Devuelve la respuesta en formato JSON
        return response()->json(data: $barrios);
    }

    
}
