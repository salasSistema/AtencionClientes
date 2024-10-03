<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\Model;


class MainController extends Controller
{
    /**
     * Permite listar todos los datos de las tablas de la bd
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return \Illuminate\Http\JsonResponse
     */
    protected function listarTodosLosDatos(Model $model): JsonResponse{
        //Obtiene todos los datos y los almacena en la variable data
        $data = $model::all();
        //Retorna un json con los datos almacenados en la variable data
        return response()->json($data);
    }
    

}
