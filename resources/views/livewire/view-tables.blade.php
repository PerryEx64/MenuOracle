    <div class="mx-64">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th></th>
                    <th>Nombre Restaurante</th>
                    <th>Direccion Restaurante</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($restaurantes as $restaurante)
                <tr class="active">
                    <th></th>
                    <th>{{$restaurante->nombre_restaurante}}</th>
                    <th>{{$restaurante->direccion_restaurante}}</th>
                    <th> <label for="my-modal" class="btn btn-outline modal-button" wire:click="buscarMenu({{$restaurante->id_restaurante}})" >Ver Menu</label></th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- The button to open modal -->


    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->


                    <tr>
                        <th>{{$guarnicion_platillo}}</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <!-- row 2 -->

                    </tbody>
                </table>
            </div>
            <div class="modal-action">
                <label for="my-modal" class="btn">Yay!</label>
            </div>
        </div>
    </div>
