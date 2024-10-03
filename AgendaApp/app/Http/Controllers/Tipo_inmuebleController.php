<?php

namespace App\Http\Controllers;

use App\Models\Tipo_inmuebles;

class Tipo_inmuebleController extends MainController
{
    //funcion index que usa a la funcion listarTodosLosFatos del controlador MainController
    public function index() {
        //Usa la funcion ListarTodosLosDatos y le ingresa un objeto por parametro
        return $this->listarTodosLosDatos(new Tipo_inmuebles());
    }
}
