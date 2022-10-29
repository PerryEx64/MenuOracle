@extends('layouts.app')

@section('content')

<div class="flex flex-row justify-center "  >
<div class="card  bg-base-100 shadow-xl w-96   mr-10">
    <figure><img src="https://img.freepik.com/foto-gratis/delicioso-plato-brasileno-alto-angulo_23-2148875277.jpg?w=1380&t=st=1666758691~exp=1666759291~hmac=6a91bd8270b1665de71a28167a292e568850d18e2a521d0ae67331ff12bf15da" alt="Food" /></figure>
    <div class="card-body">
        <h2 class="card-title">Crea tú menú</h2>
        <p>Da facilidad a tus clientes para poder ver lo que ofreces en tu menu, crealo y compartelo con ellos</p>
        <div class="card-actions justify-end">
            <a href="{{route("visualizar")}}" class="btn btn-primary">Inicia</a>
        </div>
    </div>
</div>
<div class="card  bg-base-100 shadow-xl w-96   ">
   <img src="https://img.freepik.com/fotos-premium/ceviche-pescado-elegante-mesa-restaurante_97105-89.jpg?w=1380" alt="Food" />
    <div class="card-body">
        <h2 class="card-title">Ver mi menú</h2>
        <p>Los platillos son el alma de un restaurante!</p>
        <div class="card-actions justify-end">
            <a href="{{route('visualizar/menu')}}" class="btn btn-primary">Ver menu</a>
        </div>
    </div>
</div>
</div>
@endsection
