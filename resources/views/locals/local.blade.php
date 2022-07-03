@extends('layout.locals')

@section('title', 'Detalle de cervecería')

@section('content')

<div class="container d-flex justify-content-center ">
    <div class="card" style="width: 18rem; ">

        <div class="card-body">
            <h5 class="card-title">{{ $local[1] }} </h5>
            <p class="card-text">{{ $local[2]}}</p>

        </div>
    </div>
</div>

<div class="container d-flex justify-content-center m-4">
    <a href="{{ route ('home') }}" class="btn btn-warning">Volver</a>
</div>

@endsection
