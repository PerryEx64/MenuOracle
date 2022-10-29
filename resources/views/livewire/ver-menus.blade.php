@extends('layouts.app')

@section('content')
    <div class="mx-64">
        <div>Restaurantes Registrados</div>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th></th>
                    <th>Nombre Restaurante</th>
                    <th>Direccion Restaurante</th>
                </tr>
                </thead>
                <tbody>

                @foreach($restaurantes as $restaurante)
                    <tr class="active">

                        <th>{{$restaurante->nombre_restaurante}}</th>
                        <th>{{$restaurante->direccion_restaurante}}</th>

                    </tr>
                @endforeach
                <!-- row 3 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
