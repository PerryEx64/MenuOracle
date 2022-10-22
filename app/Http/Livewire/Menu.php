<?php

namespace App\Http\Livewire;

use App\Models\ModelTipoBebida;
use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class Menu extends Component
{
    public $nombre_tipo_platillo;
    public $nombre_tipo_bebida;

    public function render()
    {

        return view('livewire.menu');
    }

    public function guardarTipoPlatillo()
    {
        $this->validate(['nombre_tipo_platillo' => 'required']);

        ModelTipoPlatillo::create([
            'nombre_tipo_platillo' => $this->nombre_tipo_platillo,
        ]);

        $this->nombre_tipo_platillo = "";
    }

    public function guardarTipoBebida()
    {
        $this->validate(['nombre_tipo_bebida' => 'required']);

        ModelTipoBebida::create([

            'nombre_tipo_bebida' => $this->nombre_tipo_bebida,
        ]);

        $this->nombre_tipo_bebida = "";
    }

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
}
