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
</head>
<body style="padding-top:105px;">
    <nav class="navbar navbar-light fixed-top">
        <span class="navbar-brand mb-0 h1 text-light mx-auto"><a href="{{ asset('/') }}" style="text-decoration: none; color: white;"><img src="{{ asset('img/ibroggi.png') }}" alt="" style="height:60px;"> &nbsp;&nbsp;&nbsp;&nbsp;| Institut Moisés Broggi</a></span>
        <!--<img src="{{ asset('img/cruz_blanca.png')}}" height="50px" width="50px" alt="" class="m-auto">-->
        <button type="button" class="btn btn-outline-danger m-auto">TANCAR SESSIÓ</button>
    </nav>

    
    @yield('content')

    <div class="card-footer text-muted mb-0">
        <p class="text-white h6">Copyright © 2020 CENTRE D’ESTUDIS POLITÈCNICS. Tots els drets reservats. Política de privacitat. Avís legal</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        $('.estat').popover({
           trigger:'hover',
           content:'Verd significa que està oberta, vermell que ja està tancada.',
           placement:'right'
       });
    });
    jQuery(document).ready(function() {
        $('.nIncidencia').popover({
           trigger:'hover',
           content:'El codi va augmentat automàticament.',
           placement:'left'
       });
    });</script>
</body>
</html>