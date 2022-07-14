@extends('layout.locals')

@section ('title', 'Listado de cervecerías')

@section('content')
<!-- table class="table table-striped mt-4">
            
  @foreach ($locals as $local)

  <tr><td><a href="/local/{{ $local->id }}"> {{ $local->name }}</a></td></tr>
    
  @endforeach 

</table -->
<div class="row">
@foreach ($locals as $local)
<div class="col-4 p-4">
  <div class="card">
  <img src="{{ $local->url }}" onclass="card-img-top" onclick="window.location = '{{ route ('localshow', $local->id)  }}'">
  <div class="card-body">
       <h5 class="card-title"><a href="{{ route ('localshow', $local->id)  }}" class="text-decoration-none text-warning">{{ $local->name }} </a></h5>
       
   </div>
  </div>
</div>
@endforeach 
</div>
<div class="container d-flex justify-content-center mt-4">
<a href=" {{ route ('local') }}" class="btn btn-warning">Nueva cervecería</a>
</div>
@endsection

@isset($texto)
  
  @section ('message')
   <x-message color="success">
    <x-slot:texto>{{$texto}}</x-slot:texto>
   </x-message>   
  @endsection 

@endisset

