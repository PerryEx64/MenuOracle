<?php

namespace App\Http\Livewire;

use App\Models\ModalRestaurante;
use Livewire\Component;

class VerMenus extends Component
{
    public function render()
    {
        $this->restaurantes = ModalRestaurante::all();
        return view('livewire.ver-menus');
    }
}
