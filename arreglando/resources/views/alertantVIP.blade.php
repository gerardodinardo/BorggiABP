@extends('templates.plantilla')

@section('titulo', 'Broggi - Alertant VIP')

@section('content')
<link href="{{ asset('/css/principalIncidencies.css') }}" rel="stylesheet">
    <div id="mySidenav2" class="sidenav2">
        <a href="{{ asset('/gestioAlertants')}}" id="back">
            Torna a l'inici
            <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>
    <div class="container border col-sm-9 mt-5 border rounded shadow-lg" style="padding: 40px; margin-bottom: 10%;">
        <h3 class="text-center" style="width: 100%; display: flex; position: center;">Alertants VIP</h1>
        <hr>
        <div class="row d-flex justify-content-center">
            <a class="btn btn-custom1 col-sm-9" href="{{ asset('/crearVIP') }}">Crear Alertant VIP</a>
        </div>
        <hr>
        <div class="d-flex justify-content-center">

        {{-- BUSCADOR--}}
            <form action="{{ action('AlertantController@indexAlertantsVIP') }}" method="get" class="form-inline">
                <div class="form-group mb-2">
                    <label for="" class="sr-only">Alertant VIP a cercar:</label>
                    <input type="text" readonly class="form-control-plaintext" id="" value="Alertant VIP a cercar:">
                </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="search" class="sr-only">Nom VIP</label>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Nom VIP">
                  </div>
                  <button type="submit" class="btn btn-custom1 btn-xl mb-2">CERCAR</button>
            </form>


        </div>
        <div class="d-flex flex-wrap justify-content-center  row no-gutters">
        @foreach ($alertants as $alertant)
            {{-- @if($alertant->tipus_alertant_id == 4) --}}
                <div class="card ml-3  mt-3 mb-5  col-sm-3">
                    <div class="card-header bg-warning text-center">
                        {{ $alertant->nom }}&nbsp;&nbsp;
                        <svg class="bi bi-award-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Adreça: </strong>{{ $alertant->adreca }}</p>
                        <p class="card-text"><strong>Tlf: </strong>{{ $alertant->telefon }}</p>
                        {{-- <p class="card-text"><strong>Comarca: </strong>{{ $alertant->municipi->comarca->nom }}</p> --}}
                        <p class="card-text"><strong>Municipi: </strong>{{ $alertant->municipi->nom }}</p>
                    </div>
                    {{-- <div class="card-footer text-muted">
                        Footer
                    </div> --}}
                </div>
            {{-- @else 
            @endif --}}
        @endforeach
        
        </div>   
        {{-- {{ $alertants->links() }} --}}
        {{$alertants->appends(['search'=>$search])->links()}}
    </div>
@endsection
    