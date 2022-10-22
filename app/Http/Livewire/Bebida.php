<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use App\Models\ModelTipoBebida;
use Livewire\Component;

class Bebida extends Component
{
    public $nombre_bebida;
    public $precio_bebida;
    public $tipo_bebida_id_tipo_bebida;
    public $restaurante_id_restaurante;

    public function render()
    {
        $this->tipoBebidas = ModelTipoBebida::all();
        return view('livewire.bebida');
    }

    public function store()
    {
        $this->validate(['nombre_bebida' => 'required']);
        $this->validate(['precio_bebida' => 'required']);
        $this->validate(['tipo_bebida_id_tipo_bebida' => 'required']);
        $this->validate(['restaurante_id_restaurante' => 'required']);

        ModelBebida::create([
            'nombre_bebida' => $this->nombre_bebida,
            'precio_bebida' => $this->precio_bebida,
            'tipo_bebida_id_tipo_bebida' => $this->tipo_bebida_id_tipo_bebida,
            'restaurante_id_restaurante' => $this->restaurante_id_restaurante
        ]);

        $this->nombre_bebida = "";
        $this->tipo_bebida_id_tipo_bebida = "";
        $this->precio_bebida = "";
        $this->restaurante_id_restaurante = "";
    }
}
