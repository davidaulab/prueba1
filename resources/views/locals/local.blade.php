@extends('layout.locals')

@section('title', 'Detalle de cervecería')

@section('content')

<div class="container d-flex justify-content-center ">

    <div class="card" style="width: 18rem; ">
       <img src="{{ $local->url }}" class="card-img-top">
       <div class="card-body">
            <h5 class="card-title">{{ $local->name }} </h5>
            <p class="card-text">{{ $local->description}}</p>

        </div>
    </div>
</div>

<div class="container d-flex justify-content-center mt-4">
    <a href="{{ route ('home') }}" class="btn btn-warning">Volver</a>
</div>

@endsection
