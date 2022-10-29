<div class="card-body">
    <h2 class="card-title">Bebidas!</h2>
    <table class="table">
        <tbody class="grid grid-cols-2">
        @foreach($bebidass as $bebida)
            <tr>
                <td>
                    {{$bebida->nombre_bebida}}
                    <br>
                    <span class="badge badge-warning badge-sm">{{$bebida->nombre_tipo_bebida}}</span>
                    <br>
                    Q.{{$bebida->precio_bebida}}.00
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
