<?php

namespace App\Http\Livewire;

use App\Models\ModalPlatilla;
use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class Platillo extends Component
{
    public $nombre_platillo;
    public $guarnicion_platillo;
    public $precio_platillo;
    public $tipo_platillo_id_tipo_platillo;
    public $restaurante_id_restaurante;

    public function render()
    {
        $this->tipoPlatillos = ModelTipoPlatillo::all();
        return view('livewire.platillo');
    }

    public function store()
    {

        ModalPlatilla::create([
            'nombre_platillo' => $this->nombre_platillo,
            'guarnicion_platillo' => $this->guarnicion_platillo,
            'precio_platillo' => $this->precio_platillo,
            'tipo_platillo_id_tipo_platillo' => $this->tipo_platillo_id_tipo_platillo,
            'restaurante_id_restaurante' => $this->restaurante_id_restaurante
        ]);

        $this->nombre_platillo = "";
        $this->guarnicion_platillo = "";
        $this->precio_platillo = "";
        $this->tipo_platillo_id_tipo_platillo = "";
        $this->restaurante_id_restaurante = "";
    }
}
