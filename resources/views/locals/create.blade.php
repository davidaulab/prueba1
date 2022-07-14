@extends('layout.locals')

@section('title', 'Nueva cervecería')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{ route ('local') }}">

  @csrf
    
  <div class="mb-3">
      <label for="name" class="form-label">Nombre de la cervecería </label>
      <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
  </div>
  <div class="mb-3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" name="description"></textarea>

  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Imagen de portada </label>
    <input type="file" class="form-control" id="img" aria-describedby="img" name="img">
</div>
  <div class="text-center">
      <button type="submit" class="btn btn-warning text-center" style="margin: auto;">Enviar</button>
  </div>
</form>

<x-message-flash />

@endsection

