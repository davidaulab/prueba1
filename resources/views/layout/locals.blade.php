<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Cervecerías </title>
    
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset ('/css/mycss.css') }}" rel="stylesheet">
    
</head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route ('landing') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url ('/contact')}}">Contacta con nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url ('/about')}}">Quienes somos</a>
                  </li>

                  
                </ul>
              </div>
            </div>
          </nav>

<!-- Titulo -->
<h2 class="text-center">@yield ('title')</h2>


          

<!-- Contenido -->

@yield ('content')

          
@yield('message')

</body>
</html>