@extends('layout.locals')

@section('title', 'Contacta con nosotros')

@section('content')
<form>
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nunca lo compartiremos</div>
  </div>
  <div class="mb-3">
      <label for="message" class="form-label">Mensaje</label>
      <input type="text" class="form-control" id="message">
  </div>
  <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1"> Autorizo recibir comunicaciones comerciales...</label>
  </div>
  <div class="text-center">
      <button type="submit" class="btn btn-primary text-center" style="margin: auto;">Enviar</button>
  </div>
</form>
@endsection

