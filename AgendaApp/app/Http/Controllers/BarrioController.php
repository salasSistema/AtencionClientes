<?php

namespace App\Http\Controllers;
use App\Models\Barrio;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BarrioController extends MainController
{   
    /**
     * LLama a la funcion listarTodosLosDatos del controlador MainController
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        //Usa la funcion ListarTodosLosDatos y le ingresa un objeto por parametro
        return $this->listarTodosLosDatos(new Barrio());
    }

     /**
     * Permite almacenar un nuevo barrio en la base de datos.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function cargarBarrio(Request $request): JsonResponse {
        // Validación de los datos de entrada antes de ser almacenados en la db
        $validacion = $request->validate([           //metodo validate verifica los datos de entrada de una solicitud http
            'nombre_barrio' => 'required|string|max:255',  //se pasa los atributos de la tabla con sus propiedades
        ]);
        // Crea un nuevo objeto de barrio con los datos de la validacion
        $barrio = Barrio::create($validacion);
        // Retorna un JSON
        return response()->json($barrio, 201); // 201 indica que se creó correctamente
    }
}
