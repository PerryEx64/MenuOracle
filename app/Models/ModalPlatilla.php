<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModalPlatilla extends Model
{
    protected $table = 'platillo';
    public $timestamps = false;

    protected $fillable = [

        'id_platillo',
        'nombre_platillo',
        'guarnicion_platillo',
        'precio_platillo',
        'tipo_platillo_id_tipo_platillo',
        'restaurante_id_restaurante'
    ];

    protected $primaryKey = 'id_platillo';

}
