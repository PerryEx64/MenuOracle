<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTipoPlatillo extends Model

{
    protected $table = 'tipo_platillo';
    public $timestamps = false;

    protected $fillable = [
        'id_tipo_platillo',
        'nombre_tipo_platillo',
    ];

    protected $primaryKey = 'id_tipo_platillo';

//    public function rel_platillo(){
//        return $this->hasMany(ModelPlatillo::class,'fk_tipo_habitacion');
//    }
}
