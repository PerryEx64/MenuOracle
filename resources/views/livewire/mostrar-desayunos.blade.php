<div class="card-body">
    <h2 class="card-title">Desayunos!</h2>
    <table class="table">
        <tbody>
        @foreach($desayunos as $desayuno)
            <tr>
                <td >
                    {{$desayuno->nombre_platillo}}
                    <br>
                    <span class="badge badge-info badge-sm">{{$desayuno->guarnicion_platillo}}</span>
                    <br>
                    Q.{{$desayuno->precio_platillo}}.00
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="flex justify-center" >
    </div>
</div>
