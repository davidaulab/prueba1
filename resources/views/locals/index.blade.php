@extends('layout.locals')

@section ('title', 'Listado de cervecerías')

@section('content')
<table class="table table-striped mt-4">
            
  @foreach ($locals as $local)

  <tr><td><a href="/local/{{ $local[0] }}"> {{ $local[1] }}</a></td></tr>
    
  @endforeach 

</table>
@endsection

@isset($texto)
  
  @section ('message')
  <p class="bg-warning p-2">{{$texto}}</p>
  @endsection 

@endisset