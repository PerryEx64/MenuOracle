<?php

namespace App\Http\Livewire;

use App\Models\ModalPlatilla;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarAlmuerzos extends Component
{
    use WithPagination;
    public function render()
    {

       $almuerzos = ModalPlatilla::where('tipo_platillo_id_tipo_platillo', '=', '1')->select('nombre_platillo', 'guarnicion_platillo', 'precio_platillo')->get();
        return view('livewire.mostrar-almuerzos', compact('almuerzos'));
    }
}
