<div class="mockup-window border border-base-300 w-50 mr-auto ml-auto">
    <div class="grid flex justify-center px-4 py-5 border-t border-base-300">
        <div class="badge badge-ghost text-xl px-4 py-4 italic">Bebidas</div>
        <form  wire:submit.prevent="store()">
            <div class="w-full max-w-xs mb-3">
                <label class="label" style="margin-bottom: -5px">
                    <span class="label-text">Nombre de la Bebida</span>
                    <span class="label-text-alt">Ej. Coca-Cola</span>
                </label>
                <input type="text" wire:model="nombre_bebida" placeholder="Escriba Aqui" class="input w-full max-w-xs" />
            </div>
            <div class="w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Elige tipo de Bebida</span>
                    <span class="label-text-alt">Ej. Alcoholica</span>
                </label>
                <select wire:model="tipo_bebida_id_tipo_bebida" class="select select-bordered">
                    <option selected>Elige</option>
                    @foreach($tipoBebidas as $tipoBebida)
                        <option  value="{{$tipoBebida->id_tipo_bebida}}" >{{$tipoBebida->nombre_tipo_bebida}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full  mb-3">
                <label class="label">
                    <span class="label-text">Ingreso Precio</span>
                </label>
                <label class="input-group">
                    <span>Precio</span>
                    <input wire:model="precio_bebida" type="number" placeholder="10" class="input input-bordered">
                    <span>Q.</span>
                </label>
            </div>

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
            <input type="submit" value="Guardar" class="btn btn-active btn-ghost mt-4">
        </form>
    </div>
</div>

