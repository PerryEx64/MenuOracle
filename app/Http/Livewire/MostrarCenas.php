<?php

namespace App\Http\Livewire;

use App\Models\ModalPlatilla;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarCenas extends Component
{
    use WithPagination;
    public function render()
    {
        $this ->cenas = ModalPlatilla::where('tipo_platillo_id_tipo_platillo', '=', '6')->select('nombre_platillo', 'guarnicion_platillo', 'precio_platillo')->get();;
        return view('livewire.mostrar-cenas');
    }
}
