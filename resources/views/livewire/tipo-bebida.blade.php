<input type="checkbox" id="modal-tipo-bebida" class="modal-toggle" />
<label for="modal-tipo-platillo" class="modal cursor-pointer">
    <label  class="modal-box relative">
        <label for="modal-tipo-bebida" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="text-lg font-bold">Registro Tipo Platillo</h3>
        <form  wire:submit.prevent="guardarTipoBebida()">
            <div class="max-w-xs mt-4">
                <label class="label">
                    <span class="label-text">Nombre Tipo Bebida</span>
                    <span class="label-text-alt">Ej. Coca-Cola</span>
                </label>
                <input  wire:model="nombre_tipo_bebida" type="text" placeholder="Escribe Aqui" class="input input-bordered w-full max-w-xs">
            </div>

            <div class="modal-action">
                <label for="modal-tipo-bebida" class="btn btn-ghost btn-sm">Cancelar</label>
                <button type="submit"  for="modal-tipo-bebida" class="btn btn-success btn-sm ">Guardar</button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </label>
</label>
