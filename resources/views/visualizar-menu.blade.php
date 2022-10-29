@extends('layouts.app')

@section('content')
    <div class="flex justify-center">{!!QrCode::size(150)->generate('http://192.168.1.3/oracle/resources/views/visualizar-menu.blade.php') !!}</div>
    <div id="titulo" class="flex justify-center">Menu del Restaurante</div>
    <br>
    <div class="flex justify-center">
        <div class="border-double border-4 border-info rounded-lg">

            <div class="card shadow-2xl sm:mx-1 sm:my-1 grid

            sm:grid-cols-2 sm:gap-2
            xl:grid-cols-3 xl:gap-3">
                @livewire('mostrar-desayunos')

                @livewire('mostrar-almuerzos')

                @livewire('mostrar-cenas')

                @livewire('mostrar-bebidas')
            </div>
        </div>
    </div>

@endsection
