<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    //Vinculacion del modelo barrio con la tabla barrio
    protected $table = 'barrio';

    // Definimos los atributos de la tabla
    protected $fillable = ['nombre_barrio'];//fillable define los campos que se deben tener en cuenta cuando se inserte o actualice la tabla

   
}
