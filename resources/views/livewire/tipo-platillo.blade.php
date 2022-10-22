<input type="checkbox" id="modal-tipo-platillo" class="modal-toggle" />
<label for="modal-tipo-platillo" class="modal cursor-pointer">
    <label  class="modal-box relative">
        <label for="modal-tipo-platillo" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="text-lg font-bold">Registro Tipo Platillo</h3>
        <form  wire:submit.prevent="guardarTipoPlatillo()">
            <div class=" max-w-xs mt-4">
                <label class="label">
                    <span class="label-text">Nombre Tipo Platillo</span>
                    <span class="label-text-alt">Ej. Cena</span>
                </label>
                <input  wire:model="nombre_tipo_platillo" type="text" placeholder="Escribe Aqui" class="input input-bordered w-full max-w-xs">
            </div>
            <div class="modal-action">
                <label for="modal-tipo-platillo" class="btn btn-ghost btn-sm">Cancelar</label>
                <button type="submit" for="modal-tipo-platillo" class="btn btn-success btn-sm ">Guardar</button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </form>

        <div style="text-align: center">
            <button type="button" wire:click="increment">+asdfadsfdsfd</button>
            <h1>{{ $count }}</h1>
        </div>
    </label>
</label>
