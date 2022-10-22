@extends('layouts.app')

@section('content')

<div class="card w-96 bg-base-100 shadow-xl justify-center ">
    <figure class="px-10 pt-10">
        <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title">Bienvenido</h2>
        <p>Da facilidad a tus clientes para poder ver lo que ofreces en tu menu, crealo y compartelo con ellos</p>
        <div class="card-actions">
            <a href="{{route("visualizar")}}" class="btn btn-primary">Inicia</a>
        </div>
    </div>
</div>
@endsection
