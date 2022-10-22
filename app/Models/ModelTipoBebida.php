<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTipoBebida extends Model
{

    protected $table = 'tipo_bebida';
    public $timestamps = false;

    protected $fillable = [

        'id_tipo_bebida',
        'nombre_tipo_bebida',
    ];

    protected $primaryKey = 'id_tipo_bebida';

    public function rel_platillo(){
        return $this->hasMany(ModelPlatillo::class,'fk_tipo_habitacion');
    }
}
