



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route ('home') }}"">Cervecerías</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/contact')}}">Contacta con nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/brewery')}}">Sugerencia de cervecería</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url ('/about')}}">Quienes somos</a>
        </li>


    </ul>
    </div>
    
  </div>
</nav>
