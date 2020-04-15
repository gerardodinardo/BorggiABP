<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/ibroggi.png') }}">
</head>
<body style="padding-top:105px;">
   <nav class="navbar navbar-light fixed-top">                 {{--  <a href="{{ route('logout') }}" --}}
        <span class="navbar-brand mb-0 h1 text-light mx-auto"><a href="{{ asset('/') }}" style="text-decoration: none; color: white;"><img src="{{ asset('img/ibroggi.png') }}" alt="" style="height:60px;"> &nbsp;&nbsp;&nbsp;&nbsp;| Institut Moisés Broggi</a></span>
        <!--<img src="{{ asset('img/cruz_blanca.png')}}" height="50px" width="50px" alt="" class="m-auto">-->


        @if (Auth::check())
        

        <div class="btn-group m-auto">
            <button type="text" class="btn btn-customNAVTEXT" style="width: 200px; border-color: #e2167c; background-color: #e2167c">{{ Auth::user()->nom }}</button>
            <button type="button" class="btn btn-customNAV dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #e2167c;">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu mt-2">
              <a class="dropdown-item" href="{{ route('logout') }}" style="width: 200px; border-color: #e2167c;" >Tanca la Sessió &nbsp;
                <svg class="bi bi-power" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 104.922.044l.5-.866a6 6 0 11-5.908-.053l.486.875z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z" clip-rule="evenodd"/>
              </svg></a>
            </div>
          </div>

          @else 


          
          @endif
          {{-- Dejo comentado el mismo estilo pero para iniciar session si no esta iniciado, nose si hara falta pero lo dejo por si acaso --}}

        {{--           
        <div class="btn-group m-auto">
            <button type="button" class="btn btn-customNAVTEXT" style="width: 200px; outline: 0;">Inicia Sessió</button>
            <button type="button" class="btn btn-customNAV dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
          </div> --}}

    </nav>

    
    @yield('content')

    <div class="card-footer text-muted mb-0">
          <p class="text-white h6 text-center" style="opacity: 50%; margin-top: 0px;">Copyright © 2020 Centre d'Estudis Politècnics. Tots els drets reservats. Política de privacitat. Avís legal.</p></div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/popover.js') }}"></script>
</body>
</html>