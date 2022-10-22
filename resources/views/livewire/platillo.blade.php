<div  class="mockup-window border border-base-300 w-50 mr-auto ml-auto">
    <div class="px-4 py-5 bg-base-200 w-100 ml-auto mr-auto">
        <div class="badge badge-neutral text-xl px-4 py-4 italic">Platillos</div>
        <form  wire:submit.prevent="store()">
            <div class="w-full max-w-xs mb-3">
                <label class="label" style="margin-bottom: -5px">
                    <span class="label-text">Nombre del Platillo</span>
                    <span class="label-text-alt">Ej. Puyazo Importado</span>
                </label>
                <input type="text" wire:model="nombre_platillo" placeholder="nombre platillo" class="input w-full max-w-xs" />
            </div>

{{--            <div class="w-full max-w-xs mb-3">--}}
{{--                <label class="label" style="margin-bottom: -5px">--}}
{{--                    <span class="label-text">Nombre del Platillo</span>--}}
{{--                    <span class="label-text-alt">Ej. Puyazo Importado</span>--}}
{{--                </label>--}}
{{--                <input type="text" wire:submit="guarnicion_platillo" placeholder="nombre platillo" class="input w-full max-w-xs" />--}}
{{--            </div>--}}

            <div class="w-full max-w-xs mb-3">
                <label class="label" style="margin-bottom: -5px" >
                    <span class="label-text">Guarniciones</span>
                    <span class="label-text-alt">Ej. Frijol, Cebollin, Papas, etc</span>
                </label>
                <textarea wire:model="guarnicion_platillo" class="textarea textarea-bordered h-24" placeholder="Escribe Aqui"></textarea>
            </div>

            <div class="w-full  mb-3">
                <label class="label">
                    <span class="label-text">Ingreso Precio</span>
                </label>
                <label class="input-group">
                    <span>Precio</span>
                    <input wire:model="precio_platillo" type="number" placeholder="10" class="input input-bordered">
                    <span>Q.</span>
                </label>
            </div>

            <select wire:model="tipo_platillo_id_tipo_platillo" class="select select-bordered w-full max-w-xs">
                <option>Elige tipo Platillo</option>
                @foreach($tipoPlatillos as $tipoPlatillo)
                    <option  value="{{$tipoPlatillo->id_tipo_platillo}}" >{{$tipoPlatillo->nombre_tipo_platillo}}</option>
                @endforeach

            </select>


            <div class="w-full  mb-3">
                <label class="label">
                    <span class="label-text">Ingreso Precio</span>
                </label>
                <label class="input-group">
                    <span>Precio</span>
                    <input wire:model="restaurante_id_restaurante" type="number" placeholder="10" class="input input-bordered">
                    <span>Q.</span>
                </label>
            </div>
            <input class="btn btn-success" type="submit" value="Guardar" class="btn btn-ghost mt-4">
        </form>
    </div>
</div>
