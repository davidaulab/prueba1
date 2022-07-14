@extends('layout.locals')

@section('title', 'Sugerencia de cervecería')

@section('content')
<form method="post" action="{{ route ('suggestbrewery') }}">

    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">Nunca lo compartiremos</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre de la cervecería</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Descripción</label>
        <textarea class="form-control" id="message" name="message"></textarea>

    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center" style="margin: auto;">Enviar</button>
    </div>
</form>

<x-message-flash />

@endsection
