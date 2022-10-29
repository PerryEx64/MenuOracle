<div class="card-body ">
    <h2 class="card-title">Cenas!</h2>
    <table class="table ">
        <tbody>
        @foreach($cenas as $cena)
            <tr>
                <td>
                    {{$cena->nombre_platillo}}
                    <br>
                    <span class="badge badge-info badge-sm">{{$cena->guarnicion_platillo}}</span>
                    <br>
                    Q.{{$cena->precio_platillo}}.00
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="flex justify-center" >
    </div>
</div>
