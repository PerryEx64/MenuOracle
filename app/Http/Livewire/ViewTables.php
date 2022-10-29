<?php

namespace App\Http\Livewire;

use App\Models\ModalPlatilla;
use App\Models\ModalRestaurante;
use Livewire\Component;

class ViewTables extends Component
{

    public $guarnicion_platillo;
    public $precio_platillo;
    public $nombre_restaurante;

    public function render()
    {
        $this->restaurantes = ModalRestaurante::all();
        return view('livewire.view-tables');
    }

    public function buscarMenu($id_restaurante){

        $platillos = ModalPlatilla::where('platillo.restaurante_id_restaurante', "=", 1)
            ->select('platillo.nombre_platillo')->get();

//        $this->nombre_platillo = $platillos->nombre_platillo;
        $this->guarnicion_platillo = $platillos->guarnicion_platillo;
//        $this->precio_platillo = $platillos->precio_platillo;
//        $this->nombre_restaurante = $platillos->nombre_restaurante;
    }
}
