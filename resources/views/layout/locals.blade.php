<x-head />

<body>

    <x-nav-bar />

    <!-- Titulo -->
    <h2 class="text-center">@yield ('title')</h2>
    <!-- Contenido -->

    @yield ('content')


    @yield('message')

 <script src="{{ asset ('js/app.js')}}" rel="text/javascript"></script>
 <script src="{{ asset ('js/myjs.js')}}" rel="text/javascript"></script>

</body>

</html>
