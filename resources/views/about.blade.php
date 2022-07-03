@extends('layout.locals')

@section ('title', 'Quienes somos')

@section('content')

<h3>Somos la empresa {{ $empName }}</h3>
<p>
  Somos una empresa que se dedica muchas cosas
</p>
<p>
  Somos una empresa que se dedica muchas cosas
</p><p>
  Somos una empresa que se dedica muchas cosas
</p><p>
  Somos una empresa que se dedica muchas cosas
</p><p>
  Somos una empresa que se dedica muchas cosas
</p><p>
  Somos una empresa que se dedica muchas cosas
</p>

    <a href="{{ route ('contact')}}">Contacta con nosotros</a>
@endsection
