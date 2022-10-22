<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBebida extends Model
{
    protected $table = 'bebida';
    public $timestamps = false;

    protected $fillable = [

        'id_bebida',
        'nombre_bebida',
        'precio_bebida',
        'tipo_bebida_id_tipo_bebida',
        'restaurante_id_restaurante'
    ];

    protected $primaryKey = 'id_bebida';

}
