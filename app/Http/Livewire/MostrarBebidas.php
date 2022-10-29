<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarBebidas extends Component
{
    use WithPagination;
    public function render()
    {
        $bebidass = ModelBebida::join('tipo_bebida' , 'tipo_bebida.id_tipo_bebida', '=', 'bebida.tipo_bebida_id_tipo_bebida')->
        select('bebida.nombre_bebida' , 'tipo_bebida.nombre_tipo_bebida', 'bebida.precio_bebida')->get();

        return view('livewire.mostrar-bebidas', compact('bebidass'));
    }
}
