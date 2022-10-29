<div class="card-body ">
    <h2 class="card-title">Almuerzos!</h2>
    <table class="table  ">
        <tbody>
        @foreach($almuerzos as $almuerzo)
            <tr class="mt-2">
                <td>
                    {{$almuerzo->nombre_platillo}}
                    <br>
                    <span class="badge badge-info badge-sm">{{$almuerzo->guarnicion_platillo}}</span>
                    <br>
                    Q.{{$almuerzo->precio_platillo}}.00
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
