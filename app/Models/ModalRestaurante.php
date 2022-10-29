<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModalRestaurante extends Model
{
    protected $table = 'restaurante';
    public $timestamps = false;

    protected $fillable = [

        'id_restaurante',
        'nombre_restaurante',
        'direccion_restaurante'
    ];

    protected $primaryKey = 'id_restaurante';


}
