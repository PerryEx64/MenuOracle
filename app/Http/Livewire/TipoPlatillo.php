<?php

namespace App\Http\Livewire;

use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class TipoPlatillo extends Component
{
    public $nombre_tipo_platillo = "sfdfsd";
    public $count = 5;

    public function render()
    {
        return view('livewire.tipo-platillo');
    }

    public function store()
    {

        ModelTipoPlatillo::create([
            'nombre_tipo_platillo' => $this->nombre_tipo_platillo,
        ]);
        $this->resetInput();
    }

    public function guardarTipoPlatillo()
    {
        $this->validate(['nombre_tipo_platillo' => 'required']);

        ModelTipoPlatillo::create([
            'nombre_tipo_platillo' => $this->nombre_tipo_platillo,
        ]);

        $this->nombre_tipo_platillo = "";
    }



    public function increment()
    {
        dd($this->count++);
    }
}
